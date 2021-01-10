// 'use strict';
function DPS_Calc(){
    let formDPS = document.forms.DPS_Calc_Form;
    var p1_value = (formDPS.elements.p1.value);
    console.log (p1_value);
    var p2_value = (formDPS.elements.p2.value);
    console.log (p2_value);
    var power1 = 1*Math.pow(10,(p1_value/10));
    console.log(power1);
    var power2 = 1*Math.pow(10,(p2_value/10));
    console.log(power2);
    var power_total = (power1 + power2);
    console.log(power_total);
    var answer = ((10 * Math.log10(power_total))/1);
    console.log(answer);
    return formDPS.dBmvalue.value = answer;
}
