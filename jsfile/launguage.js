

function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'en',
      includedLanguages: 'en,hi',
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, 'google_translate_element');
  }

  function setInitialLanguage() {
    const language = 'hi';
    const combo = document.querySelector('.goog-te-combo');
    if (combo) {
      combo.value = language;
      combo.dispatchEvent(new Event('change'));
    }
  }

  document.addEventListener("DOMContentLoaded", function() {
    googleTranslateElementInit();
    setTimeout(setInitialLanguage, 1000);  // Delay to ensure the element is rendered
  });


function setInitialLanguage() {
    const language = 'hi';
    const combo = document.querySelector('.goog-te-combo');
    if (combo) {
      combo.value = language;
      combo.dispatchEvent(new Event('change'));
    }
  }
  
  document.addEventListener("DOMContentLoaded", function() {
    googleTranslateElementInit();
    setTimeout(setInitialLanguage, 1000);  // Delay to ensure the element is rendered
  });