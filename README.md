# Sabatinex - Pesquisa Operacional, Simplificada

Repositório para a implementação do algoritmo Simplex e Mochila.

Projeto de Pesquisa Operacional
5º Semestre BSI UNIVEM 2019

O Simplex permite que se encontre valores ideais em situações em que diversos aspectos precisam ser respeitados. Diante de um problema, são estabelecidas inequações que representam restrições para as variáveis. A partir daí, testa-se possibilidades de maneira a otimizar, isto é, maximizar ou minimizar o resultado da forma mais rápida possível.

O algoritmo da mochila consiste em preencher a mochila com objetos diferentes de pesos e valores. O objetivo é que preencha a mochila com o maior valor possível, não ultrapassando o peso máximo.


## Ferramentas usadas

- ECMAScript
- jQuery
- PHP
- GitHub para versionamento
- DigitalOcean para hospedagem

## Nota de realease a ser publicado

### Simplex

- Algoritmo Simplex para problemas de maximização.
- Algoritmo Simplex para problemas de minimização.
- É exibido o passo a passo das tabelas geradas pelo método Simplex
- Tabela de Sensibilidade.

### Mochila

- Apresentação da solução, dos itens a serem considerados e a tabela de cálculo.


## Entradas personalizadas para:

### Simplex

- Limite máximo de iterações
- Tipo de Simplex (MAX ou MIN)
- Quantidade de variáveis e restrições

### Mochila
- Capacidade da mochila
- Peso e valor dos itens

## Limitações

### Simplex

- Em cada variável da função objetivo e das restrições deve conter apenas o número, sem a adição do 'x', separando os números por ';'
- Caso tenha alguma variável nula, é necessário inserir o 0


### Mochila

- Não utilizar itens com pesos iguais
- Serão permitidos somente valores inteiros


## Datas Importantes

### Simplex

Datas | Eventos
--------- | ------
22/03/19    | Início do Planejamento
23/03/19    | Criação das Estruturas Fundamentais
24/03/19    | Criação das Estruturas Reutilizáveis
31/03/19    | Testes de Estruturas Estáticas
14/04/19    | Atualização de Componentes
14/04/19    | Criação da Estrutura de PL
14/04/19    | Testes dos Requisitos Estáticos do MVP 1
20/04/19    | Correções do MVP 1
20/04/19    | Implementação da Lógica do PL
20/04/19    | Integração da Lógica na Estrutura
30/04/19    | Entrega do MVP 1
30/04/19    | Correções para MVP 1.1
01/05/19    | Implementação dos Requisitos do MVP 2
06/05/19    | Ajustes para MVP 2.0.1
08/05/19    | Entrega do MVP 2
08/05/19    | Correções para MVP 2.1
08/05/19    | Implementação de Nova AS para MVP 3
08/05/19    | Atualização do README
12/05/19    | Ajustes para MVP 3
02/05/19    | Ajustes para MVP 3.1 e deploy


### Mochila

Datas | Eventos
--------- | ------
01/05/19    | Implementação da Estrutura de PD
02/05/19    | Implementação da Lógica de PD
08/05/19    | Integração da Lógica na Estrutura
02/06/19    | Finalização e testes da Mochila para MVP 3.1, e deploy

## Compatibilidade

Requisitos | Ferramentas
--------- | ------
Navegadores     | Firefox, Chrome, Edge, Opera
Sistema Operacional    | Ubuntu, Windows, Mac

## Tecnologias

Tecnologias | Ferramentas
--------- | ------
Front-End     | HTML, ECMAScript, jQuery
Back-End    | PHP
Framework UI    | Bootstrap
Editor de Texto  | VS Code, IntelliJ IDEA
Servidor Local  | Laradock e Devilbox
Servidor Web    | DigitalOcean
DNS Handling    | Cloudflare

## Atividades Realizadas no Período

### Simplex

Código | Título | Tarefa | Situação | Observação
--------- | ------ | -------| -------| -------
1 | Maximizar | Montar a Tabela Simplex, e possibilitar o usuário a maximizar modelos de simplex com sistemas lineares. | Concluído | Apenas restrições de “<=”
2 | Minimizar | Montar a Tabela Simplex, e possibilitar o usuário a minimizar modelos de simplex com sistemas lineares. | Concluído | Apenas restrições de “<=”
3 | Demonstrar passo a passo | Demonstrar ao usuário as alterações na tabela causada pelas iterações do método simplex. | Concluído |
4  | Tabela de sensibilidade | Demonstrar ao usuário a tabela de sensibilidade. | Concluído |

### Mochila

Código | Título | Tarefa | Situação | Observação
--------- | ------ | -------| -------| -------
1 | Tabela de solução | Demonstrar ao usuário as etapas do algoritmo | Concluído |
2 | Solução do problema | Mostrar ao usuário os itens selecionados pelo algoritmo como qualificados | Concluído |

## Equipe

- Ulisses de Souza Melo (567728)
- Willian Hideki Kawabata (573051)