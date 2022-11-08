import "../styles/globals.scss";
import { Readex_Pro } from "@next/font/google";
import type { AppProps } from "next/app";

const readexPro = Readex_Pro();

export default function App({ Component, pageProps }: AppProps) {
  return (
    <>
      <style jsx global>{`
        body {
          font-family: ${readexPro.style.fontFamily};
        }
      `}</style>
      <Component {...pageProps} />
    </>
  );
}
