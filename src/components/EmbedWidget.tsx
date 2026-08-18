import { useEffect, useRef } from "react";

type Props = {
  html: string;
  scriptSrc: string;
  height?: number;
};

/**
 * Renders a third-party embed (LiveCoinWatch, TradingView cross rates, ...)
 * by injecting its markup and its loader script after hydration.
 */
export function EmbedWidget({ html, scriptSrc, height }: Props) {
  const ref = useRef<HTMLDivElement>(null);

  useEffect(() => {
    const host = ref.current;
    if (!host) return;
    host.innerHTML = html;
    const script = document.createElement("script");
    script.src = scriptSrc;
    script.async = true;
    host.appendChild(script);
    return () => {
      host.innerHTML = "";
    };
  }, [html, scriptSrc]);

  return <div ref={ref} style={height ? { minHeight: height } : undefined} />;
}
