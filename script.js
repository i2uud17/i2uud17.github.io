// Coloca aquí el número de WhatsApp con código de país, usando solamente dígitos.
// Ejemplo para México: const WHATSAPP_NUMBER = '525512345678';
const WHATSAPP_NUMBER = '';

const contactLinks = document.querySelectorAll('.contact-link');
const contactStatus = document.querySelector('.contact-status');

if (WHATSAPP_NUMBER) {
  contactLinks.forEach((link) => {
    const course = link.dataset.course;
    const message = course
      ? `Hola, Sandra. Me interesa el ${course}. ¿Podrías compartirme las próximas fechas, la modalidad y cómo inscribirme?`
      : 'Hola, Sandra. Me interesa tu formación en uñas. ¿Podrías orientarme sobre los módulos y las próximas fechas?';
    link.href = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(message)}`;
    link.target = '_blank';
    link.rel = 'noopener noreferrer';
  });
} else if (contactStatus) {
  contactStatus.textContent = 'Las consultas por WhatsApp estarán disponibles próximamente.';
}
