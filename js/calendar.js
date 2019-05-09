function calendar()
{
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth();
    var year = date.getYear();
    cal_days_labels = ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'];
    if(year<=200)
    {
        year += 1900;
    }
    months = new Array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
    days_in_month = new Array(31,28,31,30,31,30,31,31,30,31,30,31);
    if(year%4 == 0 && year!=1900)
    {
        days_in_month[1]=29;
    }
    total = days_in_month[month];
    var date_today = months[month]+' '+year;
    beg_j = date;
    beg_j.setDate(1);
    if(beg_j.getDate()==2)
    {
        beg_j=setDate(0);
    }
    beg_j = beg_j.getDay();
    document.write('<table class="cal_calendar"><tbody class="cuerpoT"><tr><th colspan="7" class="month">'+date_today+'</th></tr>');
    document.write('<tr class="cal_d_weeks">');
    for(var i = 0; i <= 6; i++ ){
        document.write('<th class="weekdays">'+cal_days_labels[i]+'</th>');
        }
    document.write('</tr></tr>')
    week = 0;
    for(i=1;i<=beg_j;i++)
    {
        document.write('<td class="cal_days_bef_aft">'+(days_in_month[month-1]-beg_j+i)+'</td>');
        week++;
    }
    for(i=1;i<=total;i++)
        {
            if(week==0)
                {
                    document.write('<tr>');
                }
                if(day==i)
                {
                    document.write('<td class="cal_today">'+i+'</td>');
                }
                else
                {
                    document.write('<td>'+i+'</td>');
                }
                week++;
                if(week==7)
                {
                    document.write('</tr>');
                    week=0;
                }
        }
    for(i=1;week!=0;i++)
        {
            document.write('<td class="cal_days_bef_aft">'+i+'</td>');
            week++;
            if(week==7)
            {
                    document.write('</tr>');
                    week=0;
            }
        }
    document.write('</tbody></table>');
    return true;
}