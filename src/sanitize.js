var ESAPI = require('node-esapi');

// Rule 1 and 2 use the output of console.log
let xss1_2 = '<script>alert(1)</script>'
let xss1_2_corrected = ESAPI.encoder().encodeForHTML(xss1_2)

console.log(`XSS 1 and 2 Payload[${xss1_2}] -> Patched[${xss1_2_corrected}]`)
// Rule 3
let xss3 = '1); alert(2'
let xss3_corrected = ESAPI.encoder().encodeForHTML(xss3)

console.log(`XSS 3 Payload[${xss3}] -> Patched[${xss3_corrected}]`)
// Rule 4
let xss4 = "javascript:alert(1)"
let xss4_corrected = ESAPI.encoder().encodeForCSS(xss4)
console.log(`XSS 4 Payload[${xss4}] -> Patched[${xss4_corrected}]`)

// Rule 5
let xss5 = `'bobo" onerror="alert(1)'`
let xss5_corrected = ESAPI.encoder().encodeForHTML(xss5)
console.log(`XSS 5 Payload[${xss5}] -> Patched[${xss5_corrected}]`)

