function validarFormularioCurp(){
    console.log("qjewncjewn");
    var nombres = document.getElementById('caja_nombres').value;
    var primerAp = document.getElementById('caja_primer_ap').value;
    var SegundoAp = document.getElementById('caja_segundo_ap').value;
    console.log(nombres);
    if(nombres==null || nombres.length==0){
        
        return false;
    }

    if(primerAp==null || primerAp.length==0 || /^\s+$/.test(primerAp)){
        return false;
    }

    if(SegundoAp==null || SegundoAp.length==0 || /^\s+$/.test(SegundoAp)){
        return false;
    }

    var genero = document.getElementById('genero');
    var indiceGenero = genero.selectedIndex;
    var opcionGenero = genero.options[indiceGenero];

    if(opcionGenero==0){
        return false;
    }


    var dia = document.getElementById('dia');
   
    if(dia==null){
        return false;
    }


    
    return true;
}




function validarFormularioConversion(){
    var numDecimal = document.getElementById('caja_decimal').value;

    if(numDecimal==null || numDecimal.length==0 || isNaN(numDecimal)){
        return false;
    }
}

function validarFormularioCadena(){
    var letra = document.getElementById('caja_letra').value;
    
    if(letra.length>1)
    return false;
}