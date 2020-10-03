function validarFormularioCurp(){
    var nombres = document.getElementById('caja_nombres').value;
    var primerAp = document.getElementById('caja_nombres').value;
    var SegundoAp = document.getElementById('caja_nombres').value;
    
    if(nombres==null || nombres.length==0 || /^\s+$/.test(nombres)){
        return false;
    }

    if(primerAp==null || primerAp.length==0 || /^\s+$/.test(primerAp)){
        return false;
    }

    if(SegundoAp==null || SegundoAp.length==0 || /^\s+$/.test(SegundoAp)){
        return false;
    }



    return true;
}