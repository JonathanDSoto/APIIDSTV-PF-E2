'use client';
import React from "react";
import Link from 'next/link'
import {UserButton, useUser} from "@clerk/nextjs";
import { UserIcon,  } from '@heroicons/react/24/outline'

const menuItems = [
    {
        title: "Pages",
        list: [
            {
                title: "Dashboard",
                path: "/dashboard",
                icon:
            },
            {
                title: "Users",
                path: "/dashboard/users",
                icon: <UserIcon />,
            },
        ]
    }
]

export default function Sidebar(){
    const { user, isLoaded } = useUser()
    return(
        // <div className="bg-gray-900 text-white">
        //     <div className="flex flex-col items-center justify-between p-6 lg:px-8 h-20
        //                 border border-t-0 border-l-0 border-b-0 border-r-gray-200
        //                 min-h-screen">
        //         <div className="flex flex-col">
        //             <a href="/dashboard" className="m-1.5 p-1.5 border-b-transparent hover:border hover:border-l-0 hover:border-t-0 hover:border-r-0 hover:border-b-white">Dashboard</a>
        //             <a href="/category" className="m-1.5 p-1.5">Category</a>
        //             <a href="/users" className="m-1.5 p-1.5">Users</a>
        //         </div>
        //         <div>
        //             {/*<Link href="/dashboard">Dashboard</Link>*/}
        //             <UserButton afterSignOutUrl="/" />
        //         </div>
        //     </div>
        // </div>
        <div>Sidebar</div>
    )
}