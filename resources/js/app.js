import "./bootstrap";
import tab from "./tab.js";
import accordion from "./accordion.js";
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();
tab();
accordion();
