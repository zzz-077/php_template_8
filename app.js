const Body = document.querySelector("body");
const navBar = document.querySelector(".navbar");
const bellBtn = document.querySelector(".bell-btn");
const threedotBtn = document.querySelector(".threedot-btn");
const searchI = document.querySelector(".search-cont i");
const searchInput = document.querySelector(".search-cont input");
const adminBtn = document.querySelector(".adminprof-cont");
const navbarBtn = document.querySelector(".navbar-btn");
const navbarBtn1 = document.querySelector(".navbar-btn1");
const stgBtn = document.querySelector(".stg-btn");
const welcomePopupMenu = document.querySelector(".welcome-popup-menu");
const stgremoveBtn = document.querySelector(".stgRemove-btn");
const LightcolorBtn = document.querySelector(".lightcolor-box");
const Darkcolorbtn = document.querySelector(".darkcolor-box");
const sideNavbar = document.querySelector(".side-navbar");
const sideNavbar1 = document.querySelector(".side-navbar1");
const sideNavbarlUL = document.querySelector(".side-navbar ul");
const sideNavbarlLi = document.querySelectorAll(".side-navbar ul li");
const ordered_li = document.querySelectorAll(".ordered_li");
const dash_A = document.querySelector(".dash_a");
const navbar_parag_icons = document.querySelectorAll(".navbar_parag_icons");
const sideNavbarlLiA = document.querySelectorAll(".side-navbar ul li a");
const sideNavbarlLiA_I = document.querySelectorAll(".side-navbar ul li i");
const Dot = document.querySelector(".dot");
const hdnavColorthemeCont = document.querySelectorAll(
    ".hdnav-colortheme-cont span"
);
const sld_navbar_btn = document.querySelectorAll(".sld_navbar_btn");
const tdl_list1 = document.querySelector(".tdl_list1");
const tdl_input = document.querySelector("#tdl_input");
const tdl_add_btn = document.querySelector("#tdl_add_btn");
const tdl_screen = document.querySelector(".tdl_screen");
const notif_remove_btn = document.querySelector(".notif_remove_btn");

const Gcolor = document.querySelector(".g-color");
const Ycolor = document.querySelector(".y-color");
const Rcolor = document.querySelector(".r-color");
const Bcolor = document.querySelector(".b-color");
const Dcolor = document.querySelector(".d-color");
const Wcolor = document.querySelector(".w-color");
/*---------------------eventlisteners------------------------*/
document.addEventListener("DOMContentLoaded", () => {
    bellBtn.addEventListener("click", bellppclick);
    adminBtn.addEventListener("click", adminclick);
    navbarBtn.addEventListener("click", navbarclick);
    navbarBtn1.addEventListener("click", navbarclickEmedia);
    stgBtn.addEventListener("click", settingclick);
    stgremoveBtn.addEventListener("click", settingremoveclick);
    LightcolorBtn.addEventListener("click", Lightcolorchange);
    Darkcolorbtn.addEventListener("click", Darkcolorchange);
    welcomePopupMenu.addEventListener("click", welcomePopupclick);
    notif_remove_btn.addEventListener("click", notifremoveClick);

    Gcolor.addEventListener("click", Gcolorclick);
    Ycolor.addEventListener("click", Ycolorclick);
    Rcolor.addEventListener("click", Rcolorclick);
    Bcolor.addEventListener("click", Bcolorclick);
    Dcolor.addEventListener("click", Dcolorclick);
    Wcolor.addEventListener("click", Wcolorclick);

    tdl_add_btn.addEventListener("click", tdlbtnClick);

    /*---------------------functions------------------------*/
    function bellppclick() {
        let bellpp = document
            .querySelector(".bell-popuup")
            .classList.toggle("active");
    }
    function adminclick() {
        let adminpp = document
            .querySelector(".admin-popuup")
            .classList.toggle("active");
    }
    function navbarclick() {
        let longnavlogo = document
            .querySelector(".longlogo")
            .classList.toggle("active");
        let mininavlogo = document
            .querySelector(".minilogo")
            .classList.toggle("active");
        navbarBtn.classList.toggle("active");

        for (let i = 0; i < 8; i++) {
            sld_navbar_btn[i].classList.toggle("active");
        }

        let sidenavULLIA = document.querySelectorAll(".side-navbar ul li a");
        let sidenavULLI = document.querySelectorAll(".side-navbar ul li ");
        document.querySelector(".side-navbar ul").classList.toggle("active");
        document.querySelector(".side-navbar").classList.toggle("active");

        for (let i = 0; i < sidenavULLIA.length; i++) {
            sidenavULLIA[i].classList.toggle("active");
        }

        for (let j = 0; j < sidenavULLIA.length; j++) {
            sidenavULLI[j].classList.toggle("active");
        }
    }
    function settingclick() {
        document.querySelector(".settings-container").classList.add("active");
    }
    function settingremoveclick() {
        document
            .querySelector(".settings-container")
            .classList.remove("active");
    }
    function Lightcolorchange() {
        LightcolorBtn.classList.add("active");
        sideNavbar.style.backgroundColor = "white";
        for (let i = 0; i <= 200; i++) {
            sideNavbarlLiA[i].style.color = "#6c7383";
            dash_A.style.color = "white";
            navbar_parag_icons[i].style.color = "#6c7383";
            sld_navbar_btn[i].style.color = "#6c7383";
            setTimeout(() => {
                LightcolorBtn.classList.remove("active");
            }, 1200);
        }
    }
    function Darkcolorchange() {
        Darkcolorbtn.classList.add("active");
        sideNavbar.style.backgroundColor = "#232227";
        for (let i = 0; i <= 200; i++) {
            sideNavbarlLiA[i].style.color = "white";
            navbar_parag_icons[i].style.color = "white";
            sld_navbar_btn[i].style.color = "white";
            setTimeout(() => {
                Darkcolorbtn.classList.remove("active");
            }, 1200);
        }
    }

    function Gcolorclick() {
        navBar.style.backgroundColor = "#57b657";
        navbarBtn.style.color = "white";
        searchI.style.color = "white";
        searchInput.style.color = "white";
        bellBtn.style.color = "white";
        threedotBtn.style.color = "white";
        navbarBtn1.style.color = "white";
    }
    function Ycolorclick() {
        navBar.style.backgroundColor = "#ffc100";
        navbarBtn.style.color = "white";
        searchI.style.color = "white";
        searchInput.style.color = "white";
        bellBtn.style.color = "white";
        threedotBtn.style.color = "white";
        navbarBtn1.style.color = "white";
    }
    function Rcolorclick() {
        navBar.style.backgroundColor = "#ff4747";
        navbarBtn.style.color = "white";
        searchI.style.color = "white";
        searchInput.style.color = "white";
        bellBtn.style.color = "white";
        threedotBtn.style.color = "white";
        navbarBtn1.style.color = "white";
    }
    function Bcolorclick() {
        navBar.style.backgroundColor = "#248afd";
        navbarBtn.style.color = "white";
        searchI.style.color = "white";
        searchInput.style.color = "white";
        bellBtn.style.color = "white";
        threedotBtn.style.color = "white";
        navbarBtn1.style.color = "white";
    }
    function Dcolorclick() {
        navBar.style.backgroundColor = "#282f3a";
        navbarBtn.style.color = "white";
        searchI.style.color = "white";
        searchInput.style.color = "white";
        bellBtn.style.color = "white";
        threedotBtn.style.color = "white";
        navbarBtn1.style.color = "white";
    }
    function Wcolorclick() {
        navBar.style.backgroundColor = "#f8f9fa";
        navbarBtn.style.color = "#6c7383";
        searchI.style.color = "#6c7383";
        searchInput.style.color = "#6c7383";
        bellBtn.style.color = "#6c7383";
        threedotBtn.style.color = "#6c7383";
        navbarBtn1.style.color = "white";
    }
    function welcomePopupclick() {
        welcomePopupMenu.classList.toggle("active");
        document.querySelector(".welcome-popuup").classList.toggle("active");
    }
    function notifremoveClick() {
        document.querySelector(".notif_proj-box").classList.add("active");
        document.querySelector(".table_proj-box").classList.add("active");
        document.querySelector(".charts-NOM-cont").classList.add("active");
    }
    hdnavColorthemeCont.forEach((tab, event) => {
        tab.addEventListener("click", () => {
            hdnavColorthemeCont.forEach((tab) =>
                tab.classList.remove("active")
            );
            tab.classList.add("active");
        });
    });
    function navbarclickEmedia() {
        sideNavbar1.classList.toggle("active");
    }
    /*
sideNavbarlLi.forEach((tab) => {
    tab.addEventListener("click", () => {
        sideNavbarlLi.forEach((event) => {
            document
                .querySelector(".sld_navbar_btn")
                .classList.toggle("rotate");
        });
    });
});
*/
    ordered_li.forEach((tab) => {
        tab.addEventListener("click", () => {
            for (let i = 0; i <= 7; i++) {
                ordered_li[i].addEventListener("click", () => {
                    sld_navbar_btn[i].classList.toggle("rotate");
                });
            }
        });
    });

    /*---------------------todolist-section------------------------*/
    /*
check_box_btn.forEach((tab) => {
    tab.addEventListener("click", () => {
        tdl_added_text.forEach((tab) => {
            tab.classList.toggle("active");
        });
    });
});
*/

    function tdlbtnClick() {
        if (tdl_input.value.trim() != 0) {
            let newparag = document.createElement("div");
            newparag.classList.add("tdl_screen");
            newparag.style.overflow = "hidden";
            newparag.innerHTML = `
 <div class="tdl_list1">
 <div class="tdl_text_checkbox">
     <i  class="fa-regular fa-square-check"></i>
     <p class="tdl_added_text">
         ${tdl_input.value}
     </p>
 </div>
 <i
     class="fa fa-remove tdl_remove_btn"
 ></i>
</div>
 `;
            tdl_screen.appendChild(newparag);
            tdl_input.value = "";
        } else {
            tdl_add_btn.classList.add("active");
        }
    }

    tdl_screen.addEventListener("click", function (e) {
        if (e.target.classList.contains("fa-remove")) {
            e.target.parentElement.parentElement.remove();
            console.log("removed");
        }
    });

    tdl_screen.addEventListener("click", function (e) {
        if (e.target.classList.contains("fa-square-check")) {
            e.target.parentElement.parentElement.classList.toggle("completed");
            console.log("checked");
        }
    });
    /*---------------------chart-1------------------------*/

    var options = {
        series: [
            {
                data: [44, 55, 31, 47, 31, 43, 26, 41, 31, 47, 33],
            },
            {
                data: [55, 69, 45, 61, 43, 54, 37, 52, 44, 61, 43],
            },
        ],
        chart: {
            height: 350,
            type: "line",
        },
        stroke: {
            curve: "smooth",
        },
        fill: {
            type: "solid",
            opacity: [0.35, 1],
        },
        labels: [
            "Dec 01",
            "Dec 02",
            "Dec 03",
            "Dec 04",
            "Dec 05",
            "Dec 06",
            "Dec 07",
            "Dec 08",
            "Dec 09 ",
            "Dec 10",
            "Dec 11",
        ],
        markers: {
            size: 0,
        },
        yaxis: [
            {},
            {
                opposite: true,
            },
        ],
        tooltip: {
            shared: true,
            intersect: false,
            y: {
                formatter: function (y) {
                    if (typeof y !== "undefined") {
                        return y.toFixed(0) + " points";
                    }
                    return y;
                },
            },
        },
    };
    var chart = new ApexCharts(document.querySelector("#chart1"), options);
    chart.render();

    /*---------------------chart-2------------------------*/
    var options = {
        series: [
            {
                name: "Inflation",
                data: [
                    2.3, 3.1, 4.0, 10.1, 4.0, 3.6, 3.2, 2.3, 1.4, 0.8, 0.5, 0.2,
                ],
            },
        ],
        chart: {
            height: 350,
            type: "bar",
        },
        plotOptions: {
            bar: {
                borderRadius: 10,
                dataLabels: {
                    position: "top", // top, center, bottom
                },
            },
        },
        dataLabels: {
            enabled: true,
            formatter: function (val) {
                return val + "%";
            },
            offsetY: -20,
            style: {
                fontSize: "12px",
                colors: ["#304758"],
            },
        },

        xaxis: {
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            position: "top",
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
            crosshairs: {
                fill: {
                    type: "gradient",
                    gradient: {
                        colorFrom: "#D8E3F0",
                        colorTo: "#BED1E6",
                        stops: [0, 100],
                        opacityFrom: 0.4,
                        opacityTo: 0.5,
                    },
                },
            },
            tooltip: {
                enabled: true,
            },
        },
        yaxis: {
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
            labels: {
                show: false,
                formatter: function (val) {
                    return val + "%";
                },
            },
        },
        title: {
            floating: true,
            offsetY: 330,
            align: "center",
            style: {
                color: "#444",
            },
        },
    };

    var chart = new ApexCharts(document.querySelector("#chart2"), options);
    chart.render();

    /*---------------------chart-3------------------------*/
    var options = {
        series: [100, 50, 50],
        chart: {
            width: 400,
            type: "pie",
        },
        labels: ["Offline sales", "Online sales", "Returns"],
        color: "red",
        responsive: [
            {
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200,
                        color: "red",
                    },
                    legend: {
                        position: "bottom",
                    },
                },
            },
        ],
    };

    var chart = new ApexCharts(document.querySelector("#chart3"), options);
    chart.render();

    /*---------------------chart-slide-section------------------------*/
});
