# Publicar la landing de SV en GitHub Pages

Esta carpeta contiene una versión estática: no requiere instalar nada ni ejecutar comandos.

1. Crea un repositorio nuevo en GitHub, por ejemplo `sv-sandra-vera`.
2. Sube **el contenido de esta carpeta** a la raíz del repositorio. `index.html` debe quedar en la raíz.
3. Abre **Settings → Pages** en el repositorio.
4. En **Build and deployment**, elige **Deploy from a branch**.
5. Selecciona la rama **main**, la carpeta **/(root)** y pulsa **Save**.
6. GitHub mostrará la dirección pública cuando termine la publicación.

La dirección tendrá este formato:

`https://TU-USUARIO.github.io/NOMBRE-DEL-REPOSITORIO/`

## Activar WhatsApp

Abre `script.js` y coloca el número internacional en `WHATSAPP_NUMBER`, usando solamente dígitos. Para México se ve así:

```js
const WHATSAPP_NUMBER = '525512345678';
```

Cada curso enviará un mensaje diferente con el nombre del módulo seleccionado.
