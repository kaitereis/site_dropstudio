# Spec — Cartão de Visitas Virtual DropStudio

## 1. Visão geral

Landing page única (mobile-first, mas responsiva) funcionando como cartão de visitas digital. Estrutura simples: foto de perfil, nome/cargo/empresa, e um conjunto de botões de contato/redes sociais que abrem links externos ao serem clicados. 

Referência visual: https://i.pinimg.com/736x/85/9f/fa/859ffa1515d473a1b80686a9e4b9273a.jpg

## 2. Objetivo

Página que a Kaíte possa enviar por link (ou QR code) no lugar de um cartão de visita físico, direcionando contatos para WhatsApp, e-mail, Instagram e site.

## 3. Conteúdo

| Campo | Valor |
|---|---|
| Nome | Kaíte Reis |
| Cargo | Dev FrontEnd / UX\|UI Designer |
| Foto | eu.png
| WhatsApp | (13) 99806-9295 |
| E-mail | contato@dropstudio.site |
| Instagram | @dropstudio_br |
| Site | https://www.dropstudio.site |
| LinkedIn | https://www.linkedin.com/in/kaitereis/


## 3b. Animações de texto
Todos os textos devem ter a entrada animada como na referência: https://animejs.com/documentation/text/splittext/textsplitter-settings/chars

##3c. O layout deve ficar com os elementos como na imagem de referência "referencia.png" Todo os elementos: eu.png, drop.svg, symbol.svg devem estar na mesma posição do arquivo "referencia.png". O bacground deve ser igual do arquivo "referencia.png" com o fundo Cinza escuro grafite `#404040` com um degradê radial no centro com o cinza claro `#727272` e Retangulo na cor #dd185a atrás da foto (eu.png) na altura da canela do homem, como se fosse o chão

## 4. Paleta de cores (extraída da logo)

- **Magenta/pink** (destaque principal, ex. botão WhatsApp): `#dd185a` 
- **Cinza médio**: `#404040`
- **Cinza escuro / grafite**: `#727272`
- **Preto**: `#000000`
- **Fundo**: Cinza escuro grafite `#404040` com um degradê radial no centro com o cinza claro `#727272`


## 5. Estrutura da página (top → bottom)

1. **Foto de perfil** — Central "eu.png"
2. **Nome** — "Kaíte Reis", tipografia bold, cor cinza bem claro #d6d6d6.
3. **Cargo/subtítulo** — "Dev FrontEnd / UX|UI Designer", peso mais leve, cor cinza #d6d6d6.
4. 
5. ** Icones devem estar no canto de um retângulo com bordas arredondadas cinza #d6d6d6 e os icones em magenta #dd185a , este retângulo sai de traz da foto (eu.png)
6. **Grade de ícones de contato** retângulos com bordas arredondadas cinza #d6d6d6 e os icones em magenta #dd185a , este retângulo sai de traz da foto (eu.png). a foto encobre parte dos retângulos, como se estivesse atras
   - Site (ícone de link/www) → https://www.dropstudio.site
   - E-mail (ícone de envelope) → mailto:contato@dropstudio.site
   - Instagram (ícone Instagram) → https://instagram.com/dropstudio_br
   - Localização (ícone de pin) → *placeholder, aguardando endereço/link do Maps*
7. **Botão de destaque — WhatsApp** — largura maior que os demais ícones, cor de destaque (magenta), com ícone "WhatsApp" → https://wa.me/5513998069295
8. **Rodapé** Retangulo na cor #dd185a atrás da foto (eu.png) na altura da canela do homem, como se fosse o chão
## 6. Comportamento / interações

- Todos os botões/ícones são links reais (`<a href>`), abrindo:
  - WhatsApp → `https://wa.me/5513998069295` (nova aba)
  - E-mail → `mailto:contato@dropstudio.site`
  - Instagram → `https://instagram.com/dropstudio_br` (nova aba)
  - Site → `https://www.dropstudio.site` (nova aba)
- Efeito de hover/tap sutil nos ícones (leve scale ou mudança de opacidade) para indicar clicabilidade.
- Página deve funcionar bem em tela de celular (é o uso principal — cartão de visita mostrado/compartilhado via celular).

## 7. Stack técnica

- HTML/CSS/JS estático (mesma abordagem do site institucional NexTI e do StartPlan Engenharia).
- Sem frameworks pesados — CSS puro ou com uma lib leve de ícones (ex. Font Awesome ou ícones SVG inline).
- Deploy: mesmo pipeline já usado (GitHub Actions + FTP para Hostgator), a menos que a Kaíte decida hospedar em domínio/subdomínio próprio da DropStudio.

## 8. Assets fornecidos

- `eu.png` — foto de perfil (usar centralizado a foto inteira).
- `symbol.svg` — **usado atras da foto ""eu.png" na altura do peito, como na imagem referencia.png
- `drop.svg` — **usado atras acima da cabeça do homem, como uma pequena parte atrás da cabeça, como na imagem referencia.png


## 10. Critério de pronto (Definition of Done)

- Página abre corretamente em mobile e desktop.
- Todos os links de contato funcionam e abrem o app/canal correto.
- Paleta de cores visualmente alinhada com a identidade DropStudio.
- Foto centralizada e inteira (sem esticar/distorcer).

