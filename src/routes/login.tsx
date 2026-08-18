import { createFileRoute, Link } from "@tanstack/react-router";

export const Route = createFileRoute("/login")({
  head: () => ({
    meta: [
      { title: "Login Member — Royal Trust Futures" },
      {
        name: "description",
        content:
          "Masuk ke akun member Royal Trust Futures untuk deposit, penarikan dana, dan memantau portofolio trading Anda.",
      },
      { property: "og:type", content: "website" },
      { property: "og:title", content: "Login Member — Royal Trust Futures" },
      {
        property: "og:description",
        content: "Masuk ke akun member Royal Trust Futures.",
      },
      { name: "twitter:card", content: "summary_large_image" },
      { name: "twitter:title", content: "Login Member — Royal Trust Futures" },
      {
        name: "twitter:description",
        content: "Masuk ke akun member Royal Trust Futures.",
      },
    ],
  }),
  component: LoginPage,
});

function LoginPage() {
  return (
    <div className="flex min-h-screen items-center justify-center bg-ink px-4">
      <div className="w-full max-w-sm rounded-xl bg-panel p-6 shadow-xl shadow-black/60">
        <h1 className="text-xl font-black">
          ROYAL<span className="text-brand-light">TRUST</span>
        </h1>
        <p className="mt-1 mb-4 text-sm text-white/60">
          Masuk untuk mengakses area member.
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
          <button
            type="button"
            className="w-full rounded-md bg-brand py-2 text-sm font-semibold"
          >
            Login Now
          </button>
        </form>
        <p className="mt-4 text-center text-xs text-white/50">
          Area member masih memerlukan backend — hubungkan Lovable Cloud untuk
          mengaktifkannya.
        </p>
        <Link
          to="/"
          className="mt-4 block text-center text-xs text-brand-light underline"
        >
          Kembali ke beranda
        </Link>
      </div>
    </div>
  );
}
