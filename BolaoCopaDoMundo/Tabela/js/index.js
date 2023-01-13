console.log("Tabela da Copa");


let tabelaJogos = document.querySelector('.tabelaJogos')
// ler o arquivo json
fetch('jogos-fase1.json').then(response => response.json()).then(data => data.forEach( jogo => {

    // criar uma linha de tabela, colocar ela na tabela
    let linha = document.createElement('tr')
    tabelaJogos.appendChild(linha)


    linha.innerHTML = `
        <td>${jogo.diaSemana}</td> 
        <td>${jogo.data}</td> 
        <td>${jogo.hora}</td> 
        <td>${jogo.grupo}</td> 
        <td class='centralizar'>
          <img  class='imagemP' src='./images/bandeiras/${jogo.mandante}' alt='mandante'/>
            
          <span class='gols'>${jogo.gols_mandante}</span>

          <span class='partida'>${jogo.partida}</span>

          <span class='gols'>${jogo.gols_visitante}</span>

          <img  class='imagemP' src='./images/bandeiras/${jogo.visitante}' alt='visitante'/>
        </td> 
        <td class='esquerda'>${jogo.estadio}</td>
    
    
    `

}))