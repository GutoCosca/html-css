// Página index

// Define o menu conforme o tamanho
function tamanho(){
    if (innerWidth >=760){
        principal.style.display = 'block'
    }
    else {
        principal.style.display = 'none'
    }
}

// Exibe o menu completo
function clickMenu(){
    if (principal.style.display == 'block'){
        principal.style.display = 'none'
    }
    else {
        principal.style.display = 'block'
    }
}

// Alternar entr tabela e Gráfico
function clickGrafico() {
        document.getElementById('pagina').src = 'grafico.html'

        pages.style.display = 'none'
    }

function clickTabela(){
    document.getElementById('pagina').src = 'pag01.html'

        pages.style.display = 'inline-block'
}

/* Controles do menu
    function clickSair() {
        
    }*/

//Controles do menu das páginas do frame  
    
var pag = 1
var pagAtual = window.document.getElementById('pag')
        
function clickPrimeira() {
    document.getElementById('pagina').src = "pag01.html"
    pagAtual.innerHTML = `Pág. 01`
    return pag
}

function clickProxima() {
    if (pag == 3) {
        pag = 3
    }
    else {
        pag ++
    }
    document.getElementById('pagina').src = `pag0${pag}.html`
    pagAtual.innerHTML = `Pág. 0${pag}`
    return pag    
}

function clickAnterior() {
    if (pag == 1) {
        pag = 1
    }
    else{
        pag --
    }
    document.getElementById('pagina').src = `pag0${pag}.html`
    pagAtual.innerHTML = `Pág. 0${pag}`
    return pag
}

function clickUltima() {
    document.getElementById('pagina').src = 'pag03.html'
    pagAtual.innerHTML = `Pág. 03`
    return pag
}
