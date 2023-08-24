import './globals.css'
import type { Metadata } from 'next'
import { Inter } from 'next/font/google'
import { Providers } from './providers'
import Navbar from './components/navbar/navbar';
import Footer from './components/footer/footer';

const inter = Inter({ subsets: ['latin'] })

export const metadata: Metadata = {
  title: 'Fabian Berger',
  description: 'Fabian Berger - Web Designer',
}

export default function RootLayout({
  children,
}: {
  children: React.ReactNode
}) {
  return (
    <html lang="en">
      <head />
      <body className={inter.className}><Providers>
        <Navbar/>
        {children}
        <Footer/>
        </Providers>
        </body>
    </html>
  )
}