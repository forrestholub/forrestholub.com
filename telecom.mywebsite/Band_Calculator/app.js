// 'use strict';
function calc_upto64() { 
  // 65633 band decimal value
    let form64 = document.forms.band_calc_64;
    var band1_value = (form64.elements.band1.value);
    var band2_value = (form64.elements.band2.value);
    var band3_value = (form64.elements.band3.value);
    console.log(band1_value); 
    console.log(band2_value); 
    console.log(band3_value);
    var band1_dec = to_decimal(band1_value);
    var band2_dec = to_decimal(band2_value);
    var band3_dec = to_decimal(band3_value);
    return form64.decvalue.value = (band1_dec + band2_dec + band3_dec); 
}

 function calc_upto128() {
  // 73680 band decimal value 
    let form128 = document.forms.band_calc_128;
    var eband1_value = (form128.elements.eband1.value);
    var eband2_value = (form128.elements.eband2.value);
    console.log(eband1_value); 
    console.log(eband2_value); 
    var eband1_dec = to_128_decimal(eband1_value);
    var eband2_dec = to_128_decimal(eband2_value);
    return form128.decvalue.value = (eband1_dec + eband2_dec);
}

function to_decimal(band_value){
    return Math.floor(Math.pow(2, (band_value - 1)));
}

function to_128_decimal(band_value){
    return Math.floor(Math.pow(2, (band_value - 65)));
}
