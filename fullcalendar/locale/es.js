! function(e) { "function" == typeof define && define.amd ? define(["jquery", "moment"], e) : "object" == typeof exports ? module.exports = e(require("jquery"), require("moment")) : e(jQuery, moment) }(function(e, a) {
    ! function() {
        var e = "Ene._Feb._Mar._Abr._May._Jun._Jul._Ago._Sep._Oct._Nov._Dic.".split("_"),
            o = "Ene_Feb_Mar_Abr_May_Jun_Jul_Ago_Sep_Oct_Nov_Dic".split("_"),
            s = a.defineLocale("es", {
                months: "Enero_Febrero_Marzo_Abril_Mayo_Junio_Julio_Agosto_Septiembre_Octubre_Noviembre_Diciembre".split("_"),
                monthsShort: function(a, s) {
                    return /-MMM-/.test(s) ? o[a.month()] : e[a.month()]
                },
                monthsParseExact: !0,
                weekdays: "Domingo_Lunes_Martes_Miercoles_Jueves_Viernes_Sabado".split("_"),
                weekdaysShort: "Dom._Lun._Mar._Mié._Jue._Vie._Sáb.".split("_"),
                weekdaysMin: "Do_Lu_Ma_Mi_Ju_Vi_Sá".split("_"),
                weekdaysParseExact: !0,
                longDateFormat: { LT: "H:mm", LTS: "H:mm:ss", L: "DD/MM/YYYY", LL: "D [de] MMMM [de] YYYY", LLL: "D [de] MMMM [de] YYYY H:mm", LLLL: "dddd, D [de] MMMM [de] YYYY H:mm" },
                calendar: {
                    sameDay: function() {
                        return "[hoy a la" + (1 !== this.hours() ? "s" : "") + "] LT"
                    },
                    nextDay: function() {
                        return "[mañana a la" + (1 !== this.hours() ? "s" : "") + "] LT"
                    },
                    nextWeek: function() {
                        return "dddd [a la" + (1 !== this.hours() ? "s" : "") + "] LT"
                    },
                    lastDay: function() {
                        return "[ayer a la" + (1 !== this.hours() ? "s" : "") + "] LT"
                    },
                    lastWeek: function() {
                        return "[el] dddd [pasado a la" + (1 !== this.hours() ? "s" : "") + "] LT"
                    },
                    sameElse: "L"
                },
                relativeTime: { future: "en %s", past: "hace %s", s: "unos segundos", m: "un minuto", mm: "%d minutos", h: "una hora", hh: "%d horas", d: "un día", dd: "%d días", M: "un mes", MM: "%d meses", y: "un año", yy: "%d años" },
                ordinalParse: /\d{1,2}º/,
                ordinal: "%dº",
                week: { dow: 1, doy: 4 }
            });
        return s
    }(), e.fullCalendar.datepickerLocale("es", "es", { closeText: "Cerrar", prevText: "&#x3C;Ant", nextText: "Sig&#x3E;", currentText: "Hoy", monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "NoViembre", "Diciembre"], monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"], dayNames: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"], dayNamesShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"], dayNamesMin: ["D", "L", "M", "X", "J", "V", "S"], weekHeader: "Sm", dateFormat: "dd/mm/yy", firstDay: 1, isRTL: !1, showMonthAfterYear: !1, yearSuffix: "" }), e.fullCalendar.locale("es", { buttonText: { month: "Mes", week: "Semana", day: "Día", list: "Agenda" }, allDayHtml: "Todo<br/>el día", eventLimitText: "más", noEventsMessage: "No hay eventos para mostrar" })
});
 