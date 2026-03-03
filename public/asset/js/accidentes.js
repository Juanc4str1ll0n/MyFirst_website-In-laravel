document.addEventListener("DOMContentLoaded", function () {

    fetch('/data/accidentes.json')
        .then(response => response.json())
        .then(data => {

            const lista = document.getElementById("lista-accidentes");

            data.forEach(accidente => {

                const item = document.createElement("li");

                // item.classList.add("mb-3");

                item.innerHTML = `
                    <div class='accidente-item'>
                        <strong>${accidente.date}</strong><br>
                        🛩️ ${accidente.flight} (${accidente.aircraft})<br>
                        📍 ${accidente.location}<br>
                        💀 ${accidente.fatalities} víctimas | ${accidente.type}
                        <hr>
                    </div>
                `;

                lista.appendChild(item);
            });

        })
        .catch(error => console.error("Error cargando accidentes:", error));

});