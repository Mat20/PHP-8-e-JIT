const template = document.createElement('template');
template.innerHTML =`
     <style>
        button {
          color: blue;
          border-radius: 5px;
          background-image: linear-gradient(black, white);
        }
     </style>
    
    <button>
       <slot name="texto" ></slot>
       <span id="contador">0</span>
    </button>
`;


class Botao extends HTMLElement {
    constructor() {
        super();
        console.log('Fui criado');
        this.attachShadow({mode: "open" });
        this.shadowRoot.appendChild(template.content.cloneNode(true));
    }

    connectedCallback() {
        const button = this.shadowRoot.querySelector('button');
        const contador = this.shadowRoot.getElementById('contador');
        button.addEventListener('click', () => {
             contador.innerText = parseInt(contador.textContent) + 1;
        });
    }
}
window.customElements.define('app-botao', Botao);