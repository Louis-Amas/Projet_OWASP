const ESAPI = require('node-esapi');

const patched = ESAPI.encoder().encodeForJavaScript('1);%20alert(2');
console.log(`http://localhost:8080/xss/rule_3.php?xss=${patched}`)