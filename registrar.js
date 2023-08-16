 
    function verificarSenhas() {
        var senha1 = document.getElementById("senha1").value;
        var senha2 = document.getElementById("senha2").value;
        var senha2Value = senha2.value;
        
        if (senha1 != senha2) {
            alert("As senhas nao conferem");
            document.getElementById("senha2").value = ""
            senha2.style.backgroundColor = "red"
        }
    }
