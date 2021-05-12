// Variable global
plato1 =  document.getElementById("plato1");
plato2 =  document.getElementById("plato2" );
plato3 =  document.getElementById("plato3" );
precio1 = 0;
precio2 = 0;
precio3 = 0;
preciototal=0;

function Plato1() {
    plato1.style = "background-color: lightgreen";
    document.getElementById("descripcion1").innerHTML = "Macarrones con tomate y queso y etc....";
    precio1 = parseInt(plato1.dataset.precio);
    preciototal = preciototal + precio1 ;
   
}

function Plato2() {
    plato2.style = "background-color: lightgreen";
    document.getElementById("descripcion2").innerHTML = "Ensalada con lechuga,tomate, pollo y queso.";
    precio2 = parseInt(plato2.dataset.precio);
    preciototal = preciototal +  precio2;
}
function Plato3() {
    plato3.style = "background-color: lightgreen";
    document.getElementById("descripcion3").innerHTML = "Lasanya de carne con tomate y bechamel.";
    precio3 = parseInt(plato3.dataset.precio)
    preciototal = preciototal + precio3 ;
}


customElements.define("first-element", class extends HTMLElement {
    constructor() {
        super();
        this.attachShadow({ mode: "open" });
    }

    handleEvent(event) {
        if (event.type === "click") {
            const MessageEvent = new CustomEvent("message", {
                detail: { from: "Manz", message: preciototal },
                bubbles: true,
                composed: true
            });
            this.dispatchEvent(MessageEvent);
        }
    }

    connectedCallback() {
        this.shadowRoot.innerHTML = `<button class="btn btn-secondary">Ticket</button>`;
        this.shadowRoot.querySelector("button").addEventListener("click", this);
    }
});

/** SecondElement component **/
customElements.define("second-element", class extends HTMLElement {
    constructor() {
        super();
        this.attachShadow({ mode: "open" });
    }

    handleEvent(event) {
        if (event.type === "message") {
            event.detail.from = "Total: ";
            const data = event.detail;
            this.shadowRoot.innerHTML = `
        <div style="background-color: lightred">
        <h5> Primer plat: ${precio1}  </h5>
        <h5> Segon plat: ${precio2}  </h5>
        <h5> Postre: ${precio3}  </h5>
          ${data.from}:
          <span>${data.message}</span>
        </div>
      `;
        }
    }

    connectedCallback() {
        this.shadowRoot.innerHTML = `<div></button>`;
        document.addEventListener("message", this);
    }
});