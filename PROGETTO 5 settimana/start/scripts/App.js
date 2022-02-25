import { FileDoc } from "./FileDoc.js";
import { UserInterface } from "./UserInterface.js";

/*importa le due classi definite negli altri files*/
export class App{
    ui = new UserInterface(); //creo istanza della classdde user
    file = [];                //creo array vuoto
    file;
    openFile = null;          //variabile da controllare se vuota per salvare/modificare
    idFile = -1;              //identifica i file
/* costruttore: i dati sono presi dal file editor.js che contengono gli id dell'html, che istanzia una nuova app e tramite il costruttore assegna i valori all'istanza di UserInterface  */
    constructor(_ui){ //save, new,editor,file,title
        this.ui = _ui;

    /*inizializza tinymce, passando il riferimento all html tramite la proprietà dell'oggetto*/
    tinymce.init({
        selector: `#${this.ui.editor}`
        });
        this.save = document.querySelector(`#${this.ui.save}`);
        this.new = document.querySelector (`#${this.ui.new}`);
        this.editor = document.querySelector (`#${this.ui.editor}`);
        this.file = document.querySelector (`#${this.ui.file}`);
        this.title = document.querySelector (`#${this.ui.title}`);

    // quando nei metodi dovrò usare tinymce.get(this.ui.editor) avrò due metodi .setContent() e .getContent()
    /*assegnare le proprietà dell'oggetto riferendosi al DOM e passando la proprietà dell'oggetto UserInterface come sopra*/
    this.recuperaDati();
    /* chiamare il metodo che fa il bind dell'evento click */
        
    this.click1();
    }

    /* chiamare il metodo che recupera i dati dal localStorage*/

    /* metodo che fa il bind sul click, attenzione all'uso di this*/
    click1(){ 

        this.save.addEventListener('click', this.saveDoc.bind(this));
        this.new.addEventListener('click', this.newDoc.bind(this));
 
    }
 };
 
    
    /* metodo che recupera i dati nel localStorage*/
    
    /* metodo che carica l'oggetto file */

    /* metodo che ripulisce */

    /* altro metodo: se non ci sono file caricati crea un oggetto file e fa il push nell'array */
    /* altrimenti modifica il file assegnando i valori letti dal form*/
    /* salva l'array nel localStorage e chiama la funzione che stampa a video*/

    /* metodo che stampa a video */

    /* metodo che svuota il form */
