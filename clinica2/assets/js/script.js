// // 🟩 Intercepta el evento submit
// document.getElementById('formAgregarPaciente').addEventListener('submit', async function(e) {
//     e.preventDefault();// 🟩 Cancela el envío tradicional del formulario
  
//     const form = e.target;
//     const formData = new FormData(form);// 🟩 Prepara los datos en FormData
  
//     try {
//        // 🟩 Envío con fetch (AJAX)
//       const response = await fetch('../api/pacientes.php', {
//         method: 'POST',
//         body: formData
//       });
//    // 🟩 Espera respuesta JSON
//       const result = await response.json();
//    // 🟩 Si todo salió bien, redirige manualmente (sin recarga original)
//       if (result.success) {
//         alert('Paciente agregado correctamente');
//         window.location.href = '../public/lista_pacientes.php';
//       } else {
//         alert('Errores: ' + result.errores.join('\n'));// 🟩 Muestra errores dinámicamente
//       }
  
//     } catch (error) {
//       console.error('Error en la solicitud:', error);// 🟩 Manejo de error en red
//       alert('Ocurrió un error al enviar el formulario.');
//     }
//   });