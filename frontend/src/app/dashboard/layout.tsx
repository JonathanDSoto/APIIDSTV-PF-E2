import Sidebar from "@/ui/dashboard/Sidebar";
import Nav from "@/ui/navbar/Nav";
import React from "react";

const Layout = ({children}:{children:React.ReactNode}) => {
    return (
        <div className="flex">
            <div className="flex-auto w-1/5 bg-secondary-color p-5">
                <Sidebar />
            </div>
            <div className="flex-auto w-4/5 p-5">
                <Nav />
                {children}
            </div>
        </div>
    )
}

export default Layout;