import { createBrowserRouter } from "react-router-dom";
import Home from "./src/Pages/Home";
import Dashboard from "./src/Pages/Dashboard";

const router = createBrowserRouter([
    {
        path: "/",
        element: <Home />,
    },
    {
        path: "/dashboard",
        element: <Dashboard />,
    },
]);

export default router;
