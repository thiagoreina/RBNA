/* EVENTO WINDOW.ONLOAD
-------------------------------------------- */
window.onload = function() {
    zebrada("zebrada");
}
/* JS LISTAR ASSISTENCIAS
-------------------------------------------- */
function AssistenciasMaximize(variavelGET) {
    zebrada("zebradaUP");
    document.getElementById("CONTEUDO").style.display = "none";
    document.getElementById("JS-Assistencias").style.display = "block";
    document.getElementById("text-link").style.fontWeight = "bold";
    document.getElementById(variavelGET).style.fontWeight = "normal";
}
/* MOSTRA E ESCONDE BACKGROUND DAS TR ZEBRADA
-------------------------------------------- */
function id(el){
        return document.getElementById(el);
}
var cor_antiga;
function zebrada (variavel)
{
        var trs = id(variavel).getElementsByTagName('tr');
        for( var i=0; i<trs.length; i++ )
        {
                trs[i].onmouseover = function()
                {
                        cor_antiga = this.style.backgroundColor;
                        this.style.backgroundColor = 'rgba(70,130,180,0.2)';
                }
                trs[i].onmouseout = function()
                {
                        this.style.backgroundColor = cor_antiga;
                }
        }
}