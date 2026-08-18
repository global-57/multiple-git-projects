import { useEffect, useRef } from "react";

declare global {
  interface Window {
    TradingView?: { widget: new (options: Record<string, unknown>) => unknown };
  }
}

function loadScript(src: string) {
  return new Promise<void>((resolve, reject) => {
    const existing = document.querySelector<HTMLScriptElement>(
      `script[src="${src}"]`,
    );
    if (existing) {
      if (existing.dataset["loaded"] === "true") return resolve();
      existing.addEventListener("load", () => resolve());
      existing.addEventListener("error", () => reject());
      return;
    }
    const script = document.createElement("script");
    script.src = src;
    script.async = true;
    script.addEventListener("load", () => {
      script.dataset["loaded"] = "true";
      resolve();
    });
    script.addEventListener("error", () => reject());
    document.head.appendChild(script);
  });
}

export function TradingViewChart({ symbol }: { symbol: string }) {
  const containerId = "tradingview_main";
  const ref = useRef<HTMLDivElement>(null);

  useEffect(() => {
    let cancelled = false;
    loadScript("https://s3.tradingview.com/tv.js")
      .then(() => {
        if (cancelled || !window.TradingView || !ref.current) return;
        ref.current.innerHTML = "";
        new window.TradingView.widget({
          width: "auto",
          height: 440,
          symbol: `BINANCE:${symbol}`,
          interval: "1",
          timezone: "Etc/UTC",
          theme: "dark",
          style: "1",
          locale: "en",
          toolbar_bg: "#f1f3f6",
          enable_publishing: false,
          allow_symbol_change: true,
          studies: ["BB@tv-basicstudies", "PSAR@tv-basicstudies"],
          container_id: containerId,
        });
      })
      .catch(() => undefined);
    return () => {
      cancelled = true;
    };
  }, [symbol]);

  return (
    <div className="overflow-hidden rounded-lg bg-panel-2">
      <div id={containerId} ref={ref} style={{ height: 440 }} />
    </div>
  );
}
