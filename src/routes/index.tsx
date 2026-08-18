import { createFileRoute, Link } from "@tanstack/react-router";
import { useState } from "react";
import { TradingViewChart } from "@/components/TradingViewChart";
import { EmbedWidget } from "@/components/EmbedWidget";

export const Route = createFileRoute("/")({
  head: () => ({
    meta: [
      { title: "Royal Trust Futures — Trading Crypto & Forex Realtime" },
      {
        name: "description",
        content:
          "Pantau chart crypto realtime, kurs forex, dan kelola deposit serta penarikan dana dalam satu dashboard Royal Trust Futures.",
      },
      { property: "og:type", content: "website" },
      { property: "og:title", content: "Royal Trust Futures" },
      {
        property: "og:description",
        content:
          "Chart crypto realtime, kurs forex, deposit dan penarikan dalam satu tempat.",
      },
      { name: "twitter:card", content: "summary_large_image" },
      { name: "twitter:title", content: "Royal Trust Futures" },
      {
        name: "twitter:description",
        content:
          "Chart crypto realtime, kurs forex, deposit dan penarikan dalam satu tempat.",
      },
    ],
  }),
  component: HomePage,
});

const PAIRS = [
  "ETHBTC",
  "BNBBTC",
  "LTCBTC",
  "BTCUSDT",
  "ETHUSDT",
  "XRPBTC",
  "BNBUSDT",
  "LTCUSDT",
  "ADABTC",
  "ADAUSDT",
  "DOGEBTC",
  "DOGEUSDT",
  "ATOMBTC",
];

function pairLabel(pair: string) {
  const quotes = ["USDT", "BTC", "ETH", "BNB"];
  const quote = quotes.find((q) => pair.endsWith(q) && pair !== q);
  return quote ? `${pair.slice(0, -quote.length)}/${quote}` : pair;
}

const QUICK_LINKS = [
  { label: "Deposit", icon: "/assets_landing/img/deposit.svg" },
  { label: "Withdraw", icon: "/assets_landing/img/withdrawal.svg" },
  { label: "Profile", icon: "/assets_landing/img/profile.svg" },
];

const FOOTER_LINKS = [
  { label: "Homepage", icon: "/assets_landing/img/home (1).svg", to: "/" },
  { label: "Blogs", icon: "/assets_landing/img/claims.svg", to: "/" },
  { label: "Profile", icon: "/assets_landing/img/profile.svg", to: "/login" },
  {
    label: "Withdraw",
    icon: "/assets_landing/img/reporting.svg",
    to: "/login",
  },
  {
    label: "Contact Us",
    icon: "/assets_landing/img/live-chat.svg",
    to: "/login",
  },
];

function HomePage() {
  const [pair, setPair] = useState("ETHBTC");
  const [menuOpen, setMenuOpen] = useState(false);

  return (
    <div className="min-h-screen bg-ink pb-24">
      <header className="sticky top-0 z-20 border-b border-white/10 bg-panel">
        <div className="mx-auto flex max-w-3xl items-center justify-between gap-3 px-4 py-3">
          <Link to="/" className="text-lg font-black tracking-tight">
            ROYAL<span className="text-brand-light">TRUST</span>
          </Link>
          <div className="flex items-center gap-2 text-xs text-white/70">
            <span className="rounded-full bg-white/5 px-3 py-1">
              $0.00 <strong className="text-white">— Not Login</strong>
            </span>
          </div>
          <button
            type="button"
            aria-label="Buka menu"
            onClick={() => setMenuOpen((open) => !open)}
            className="rounded-md border border-white/15 px-3 py-1.5 text-sm"
          >
            ☰
          </button>
        </div>
      </header>

      <main className="mx-auto max-w-3xl px-4">
        {menuOpen && (
          <section className="mt-4 rounded-xl bg-panel p-4 shadow-lg shadow-black/60">
            <h2 className="text-base font-bold">Login Form</h2>
            <p className="mb-3 text-sm text-white/60">
              Masukkan username dan password dengan benar
            </p>
            <form className="space-y-2">
              <input
                className="w-full rounded-md bg-black/60 px-3 py-2 text-sm outline-none ring-1 ring-white/10 focus:ring-brand-light"
                placeholder="Username / Email"
                name="username"
              />
              <input
                className="w-full rounded-md bg-black/60 px-3 py-2 text-sm outline-none ring-1 ring-white/10 focus:ring-brand-light"
                placeholder="Your Password"
                type="password"
                name="password"
              />
              <div className="flex gap-2 pt-1">
                <Link
                  to="/login"
                  className="flex-1 rounded-md bg-white/10 py-2 text-center text-sm font-semibold"
                >
                  Login Now
                </Link>
                <Link
                  to="/login"
                  className="flex-1 rounded-md bg-brand py-2 text-center text-sm font-semibold"
                >
                  Register
                </Link>
              </div>
            </form>
          </section>
        )}

        <section className="mt-4 grid grid-cols-3 gap-2 rounded-xl bg-brand p-3">
          {QUICK_LINKS.map((item) => (
            <Link
              key={item.label}
              to="/login"
              className="flex flex-col items-center gap-1 rounded-lg bg-black/20 py-3 text-xs font-semibold"
            >
              <img src={item.icon} alt="" width={24} height={24} />
              {item.label}
            </Link>
          ))}
        </section>

        <h2 className="mt-6 mb-2 text-base font-bold">Trade</h2>
        <select
          value={pair}
          onChange={(event) => setPair(event.target.value)}
          className="mb-3 w-full rounded-md bg-panel px-3 py-2 text-sm ring-1 ring-white/10"
          aria-label="Pilih pasangan trading"
        >
          {PAIRS.map((item) => (
            <option key={item} value={item}>
              {pairLabel(item)}
            </option>
          ))}
        </select>

        <TradingViewChart symbol={pair} />

        <div className="mt-2 flex gap-2">
          <Link
            to="/login"
            className="flex-1 rounded-md bg-emerald-600 py-2 text-center text-sm font-bold"
          >
            Buy
          </Link>
          <Link
            to="/login"
            className="flex-1 rounded-md bg-red-600 py-2 text-center text-sm font-bold"
          >
            Sell
          </Link>
        </div>

        <h2 className="mt-6 mb-2 text-base font-bold">Coin Charts</h2>
        <div className="space-y-2 rounded-xl bg-panel p-3">
          {["BTC", "ETH", "LTC"].map((coin) => (
            <EmbedWidget
              key={coin}
              height={120}
              scriptSrc="https://www.livecoinwatch.com/static/lcw-widget.js"
              html={`<div class="livecoinwatch-widget-1" lcw-coin="${coin}" lcw-base="USD" lcw-secondary="BTC" lcw-period="d" lcw-color-tx="#ffffff" lcw-color-pr="#58c7c5" lcw-color-bg="#1f2434" lcw-border-w="1"></div>`}
            />
          ))}
        </div>

        <h2 className="mt-6 mb-2 text-base font-bold">Realtime Forex</h2>
        <div className="rounded-xl bg-panel p-3">
          <EmbedWidget
            height={420}
            scriptSrc="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js"
            html={`<div class="tradingview-widget-container"><div class="tradingview-widget-container__widget"></div></div>`}
          />
        </div>
      </main>

      <footer className="fixed inset-x-0 bottom-0 z-20 border-t border-white/10 bg-panel">
        <nav className="mx-auto flex max-w-3xl items-stretch justify-between px-2 py-2">
          {FOOTER_LINKS.map((item) => (
            <Link
              key={item.label}
              to={item.to}
              className="flex flex-1 flex-col items-center gap-1 text-[10px] text-white/70"
            >
              <img src={item.icon} alt="" width={22} height={22} />
              <span>{item.label}</span>
            </Link>
          ))}
        </nav>
      </footer>
    </div>
  );
}
