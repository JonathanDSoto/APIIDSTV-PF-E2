import Image from 'next/image'
import {auth} from "@clerk/nextjs";
import {red} from "next/dist/lib/picocolors";
import {redirect} from "next/navigation";

export default function Home() {
    const { userId } = auth();
    if (userId){
        redirect('/dashboard')
    }
  return (
    <main className="flex min-h-screen flex-col items-center justify-between p-24">
      <h1>main app</h1>
    </main>
  )
}
