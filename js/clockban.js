function clockOn() {
    var now = new Date(phpdate); //2021/04/09 -> Y/m/d
    var dname = now.getDay(),
    per = "AM";

    if (phpdateH >= 12) {
        per = 'PM';
    }

    
    Number.prototype.pad = function(digits) {
        for (var n = this.toString(); n.length < digits; n = 0 + n);
        return n;
    }
    
    var months = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    var week = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];
    var ids = ["dayname", "month", "daynum", "year", "periodo"];
    var values = [week[dname], months[phpdateMes], phpdateDnum.pad(2), phpdateAno, per];

    for (var i = 0; i < ids.length; i++)
        document.getElementById(ids[i]).firstChild.nodeValue = values[i];
    }

function clockOnoff() {
    var nowoff = new Date(phpdateoff); //2021/04/09 -> Y/m/d
    var dnameoff = nowoff.getDay(),
    peroff = "AM";

    if (phpdateHoff >= 12) {
        peroff = 'PM';
    }

    
    Number.prototype.pad = function(digits) {
        for (var n = this.toString(); n.length < digits; n = 0 + n);
        return n;
    }
    
    var months = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    var week = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];
    var ids = ["daynameoff", "monthoff", "daynumoff", "yearoff", "periodooff"];
    var values = [week[dnameoff], months[phpdateMesoff], phpdateDnumoff.pad(2), phpdateAnooff, peroff];

    for (var i = 0; i < ids.length; i++)
        document.getElementById(ids[i]).firstChild.nodeValue = values[i];
    }

function onClock() {
    datetime();
    datetimeoff();
    clockOn();
    clockOnoff();
    
    window.setInterval("datetime()", 1);
    window.setInterval("datetimeoff()", 1);
    window.setInterval("clockOn()", 1);
    window.setInterval("clockOnoff()", 1);
} 