(function(){

    $(document).ready(function(){
        frmData.onsubmit = function(){return false;}
        
        $('.btnCalculate').click(function(){
            $.ajax({
                type: 'POST',
                url: 'php/Controller.php',
                data: {validateData: true, a: txtBase.value, b: txtExponent.value},
                success: function(r){
                    r = Number(r);
                    if(r === 1){
                        $.ajax({
                            type: 'POST',
                            url: 'php/Controller.php',
                            data: {calculateExponent: true, a: txtBase.value, b: txtExponent.value},
                            success: function(t){
                                $('#resultCont').html(`
                                    <br/><br/>
                                    <h4 class='center deep-purple-text text-lighten-4'>Resultado</h4>
                                    <h2 class='center deep-purple-text text-lighten-1'>${txtBase.value}<sup>${txtExponent.value}</sup> = ${t}</h2>
                                `);
                            }
                        })
                    }else if(r === 0){
                        Materialize.toast('Ingrese valores válido! [a: Entero o decimal] [b: Entero]', 2000);
                        $('#resultCont').html("");
                    }
                }
            })
        });
    });

})();