const data = 'https://akcneceny.nibe.sk/data.php';

const phoneRegexCZ = /^(?:(?:\+420|00420))?(?![18])(?=(?:\d{9}$))\d+$/;
const phoneRegexSK = /^(?:\+421|00421)(?:2\d{8}|[3-5]\d\d{7})$/;
const zipRegexCZ = /^[1-7]\d{4}$/;
const zipRegexSK = /^[089]\d{4}$/;
const emailRegex = /^(?![.])[a-zA-Z0-9._%+-]*[a-zA-Z0-9](?<![.])@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*\.[a-zA-Z]{2,}$/;

function stripSpaces(phone) {
  return phone.replace(/\s+/g, '');
}

function normalizePhoneSK(phone) {
  let normalized = phone.replace(/^\(0(\d+)\)/, "0$1");
  normalized = normalized.replace(/^0/, "+421");
  return normalized;
}

function clearErr(){
  document.querySelectorAll('.err').forEach(el => {
    el.classList.remove('err');
  });
}

const phoneErr = 'Telefónne číslo nie je v povolenom formáte.';
const emailErr = 'E-mailová adresa nie je platná.';
const zipErr = 'Poštové smerovacie číslo nie je platné.';
const txLenErr = 'Vyplňte, prosím, toto pole.';
const checkboxErr = 'Vyžaduje sa súhlas so spracovaním osobných údajov.';

function stripUnsupChars(str) {
  // odstrani emoji a non-unicode znaky
  return str.replace(/[^\p{L}\p{N}\p{P}\p{Zs}]/gu, '');
}

function txLen(check_id){
  let is_ok = true;
  if(document.getElementById(check_id).value == ''){
    showToast(txLenErr, "warning");
    is_ok = false;
  } else {
    document.getElementById(check_id).value = stripUnsupChars(document.getElementById(check_id).value);
  }
  return is_ok;
}

function emailTest(check_id){
  let is_ok = true;
  let email = document.getElementById(check_id).value;
  if(!emailRegex.test(email)){
    showToast(emailErr, "warning");
    is_ok = false;
  } else {
    //normalizace emailu
    document.getElementById(check_id).value = email.toLowerCase();
  }
  return is_ok;
}

function phoneTest(check_id){
  let is_ok = true;
  let phone = document.getElementById(check_id).value;
  if(!phoneRegexSK.test(phone)){
    showToast(phoneErr, "warning");
    is_ok = false;
  } 
  return is_ok;
}

function zipTest(check_id){
  let is_ok = true;
  let zip = document.getElementById(check_id).value;
  if(!zipRegexSK.test(zip)){
    showToast(zipErr, "warning");
    is_ok = false;
  } 
  return is_ok;
}


// odeslani formulare

document.querySelector('.button.submit').addEventListener('click', function (event) {
  event.preventDefault();

  let err = false;
  clearErr();

  document.getElementById('adresa').value = document.getElementById('adresa').value.trim();
  document.getElementById('psc').value = document.getElementById('psc').value.trim();
  // normalizace psc
  document.getElementById('psc').value = stripSpaces(document.getElementById('psc').value);

  document.getElementById('jmeno').value = document.getElementById('jmeno').value.trim();
  document.getElementById('email').value = document.getElementById('email').value.trim();
  document.getElementById('telefon').value = document.getElementById('telefon').value.trim();
  // normalizace telefonniho cisla
  document.getElementById('telefon').value = stripSpaces(document.getElementById('telefon').value);
  document.getElementById('telefon').value = normalizePhoneSK(document.getElementById('telefon').value);
  document.getElementById('poznamky').value = document.getElementById('poznamky').value.trim();

  let typ = "";
  if (document.getElementById('novostavba').checked) { typ = "Novostavba"; }
  if (document.getElementById('rekonstrukce').checked) { typ = "Rekonstrukce"; }

  if(!err){
    if(!txLen('jmeno')){
      err = true;
      document.getElementById('jmeno').closest('.item').classList.add('err');
  }}
  if(!err){
    if(!emailTest('email')){
      err = true;
      document.getElementById('email').closest('.item').classList.add('err');
  }}
  if(!err){
    if(!phoneTest('telefon')){
      err = true;
      document.getElementById('telefon').closest('.item').classList.add('err');
  }}
  if(!err){
    if(!txLen('adresa')){
      err = true;
      document.getElementById('adresa').closest('.item').classList.add('err');
  }}
  if(!err){
    if(!zipTest('psc')){
      err = true;
      document.getElementById('psc').closest('.item').classList.add('err');
  }}
  if(!err){
    if (!document.getElementById('souhlas').checked) {
      err = true;
      showToast(checkboxErr, "warning");
      document.getElementById('souhlas').closest('.item').classList.add('err');
  }}

  if(!err){
    
    const params = new URLSearchParams({
      akce: 'registration',
      name: document.getElementById('jmeno').value,
      email: document.getElementById('email').value,
      phone: document.getElementById('telefon').value,
      address: document.getElementById('adresa').value,
      zip: document.getElementById('psc').value,
      notice: document.getElementById('poznamky').value,
      type: typ,
      gdpr_consent: 1,
      lang: 'sk'
    });

      const url = data + '?' + params.toString(); 

      fetch(url, {  method: 'GET'})
        .then(res => {
          if (!res.ok) { throw new Error('Chyba servera: ' + res.status); }
          return res.json();
        })
        .then(reply => {
          if(reply.result == "nok"){
            let errorText;
            if(reply.error == 4){ errorText = 'Nepodarilo sa zapísať do databázy'; }
            if(reply.error == 2){ errorText = 'E-mailová adresa už bola použitá'; }
            if(reply.error == 1){ errorText = 'E-mailová adresa nie je platná'; }
            throw new Error('Odoslanie dopytu sa nepodarilo: ' + errorText);
          } 
          
          document.getElementById('jmeno').value = '';
          document.getElementById('email').value = '';
          document.getElementById('telefon').value = '';
          document.getElementById('adresa').value = '';
          document.getElementById('psc').value = '';
          document.getElementById('poznamky').value = '';
          document.getElementById('souhlas').checked = false;
          document.getElementById('novostavba').checked = false;
          document.getElementById('rekonstrukce').checked = false;

          document.querySelectorAll('.checked').forEach(el => {
            el.classList.remove('checked');
          });

          showToast("Ďakujeme za odoslanie nezáväzného dopytu!", "success");

        })
        .catch(error => {
          showToast(error.message, "danger");
        });
    }


});




// ovladani checkboxu

document.querySelectorAll('div.checkbox').forEach(div => {
  div.addEventListener('click', function () {
    const parentDoubleCheck = this.closest('.doublecheck');

    if (parentDoubleCheck) {
      parentDoubleCheck.querySelectorAll('div.checkbox.checked').forEach(chk => {
        chk.classList.remove('checked');
        const siblingInput = chk.parentElement.querySelector('input[type="checkbox"]');
        if (siblingInput) siblingInput.checked = false; 
      });
    }

    this.classList.toggle('checked');

    const siblingCheckbox = this.parentElement.querySelector('input[type="checkbox"]');
    if (siblingCheckbox) {
      if (parentDoubleCheck) {
        siblingCheckbox.checked = true;
      } else {
        siblingCheckbox.click();
      }
    }
  });
});