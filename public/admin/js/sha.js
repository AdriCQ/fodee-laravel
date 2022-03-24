"use strict";(function(n){function e(n,e,r){var t,a,o,s,c,h,l,p,d=0,g=[],H=0,v=!1,A=!1,E=[],S=[],m=!1;if(r=r||{},t=r.encoding||"UTF8",p=r.numRounds||1,o=b(e,t),p!==parseInt(p,10)||1>p)throw Error("numRounds must a integer >= 1");if("SHA-1"===n)c=512,h=M,l=P,s=160;else if(h=function(e,r){return I(e,r,n)},l=function(e,r,t,a){var o,u;if("SHA-224"===n||"SHA-256"===n)o=15+(r+65>>>9<<4),u=16;else{if("SHA-384"!==n&&"SHA-512"!==n)throw Error("Unexpected error in SHA-2 implementation");o=31+(r+129>>>10<<5),u=32}for(;e.length<=o;)e.push(0);for(e[r>>>5]|=128<<24-r%32,e[o]=r+t,t=e.length,r=0;r<t;r+=u)a=I(e.slice(r,r+u),a,n);if("SHA-224"===n)e=[a[0],a[1],a[2],a[3],a[4],a[5],a[6]];else if("SHA-256"===n)e=a;else if("SHA-384"===n)e=[a[0].a,a[0].b,a[1].a,a[1].b,a[2].a,a[2].b,a[3].a,a[3].b,a[4].a,a[4].b,a[5].a,a[5].b];else{if("SHA-512"!==n)throw Error("Unexpected error in SHA-2 implementation");e=[a[0].a,a[0].b,a[1].a,a[1].b,a[2].a,a[2].b,a[3].a,a[3].b,a[4].a,a[4].b,a[5].a,a[5].b,a[6].a,a[6].b,a[7].a,a[7].b]}return e},"SHA-224"===n)c=512,s=224;else if("SHA-256"===n)c=512,s=256;else if("SHA-384"===n)c=1024,s=384;else{if("SHA-512"!==n)throw Error("Chosen SHA variant is not supported");c=1024,s=512}a=X(n),this.setHMACKey=function(e,r,o){var u;if(!0===A)throw Error("HMAC key already set");if(!0===v)throw Error("Cannot set HMAC key after finalizing hash");if(!0===m)throw Error("Cannot set HMAC key after calling update");if(t=(o||{}).encoding||"UTF8",r=b(r,t)(e),e=r.binLen,r=r.value,u=c>>>3,o=u/4-1,u<e/8){for(r=l(r,e,0,X(n));r.length<=o;)r.push(0);r[o]&=4294967040}else if(u>e/8){for(;r.length<=o;)r.push(0);r[o]&=4294967040}for(e=0;e<=o;e+=1)E[e]=909522486^r[e],S[e]=1549556828^r[e];a=h(E,a),d=c,A=!0},this.update=function(n){var e,r,t,u=0,i=c>>>5;for(e=o(n,g,H),n=e.binLen,r=e.value,e=n>>>5,t=0;t<e;t+=i)u+c<=n&&(a=h(r.slice(t,t+i),a),u+=c);d+=u,g=r.slice(u>>>5),H=n%c,m=!0},this.getHash=function(e,r){var t,o,b;if(!0===A)throw Error("Cannot call getHash after setting HMAC key");switch(b=w(r),e){case"HEX":t=function(n){return u(n,b)};break;case"B64":t=function(n){return i(n,b)};break;case"BYTES":t=f;break;default:throw Error("format must be HEX, B64, or BYTES")}if(!1===v)for(a=l(g,H,d,a),o=1;o<p;o+=1)a=l(a,s,0,X(n));return v=!0,t(a)},this.getHMAC=function(e,r){var t,o,b;if(!1===A)throw Error("Cannot call getHMAC without first setting HMAC key");switch(b=w(r),e){case"HEX":t=function(n){return u(n,b)};break;case"B64":t=function(n){return i(n,b)};break;case"BYTES":t=f;break;default:throw Error("outputFormat must be HEX, B64, or BYTES")}return!1===v&&(o=l(g,H,d,a),a=h(S,X(n)),a=l(o,s,c,a)),v=!0,t(a)}}function r(n,e){this.a=n,this.b=e}function t(n,e,r){var t,a,o,u,i,f=n.length;if(e=e||[0],r=r||0,i=r>>>3,0!==f%2)throw Error("String of HEX type must be in byte increments");for(t=0;t<f;t+=2){if(a=parseInt(n.substr(t,2),16),isNaN(a))throw Error("String of HEX type contains invalid characters");for(u=(t>>>1)+i,o=u>>>2;e.length<=o;)e.push(0);e[o]|=a<<8*(3-u%4)}return{value:e,binLen:4*f+r}}function a(n,e,r){var t,a,o,u,i=[];i=e||[0];for(r=r||0,a=r>>>3,t=0;t<n.length;t+=1)e=n.charCodeAt(t),u=t+a,o=u>>>2,i.length<=o&&i.push(0),i[o]|=e<<8*(3-u%4);return{value:i,binLen:8*n.length+r}}function o(n,e,r){var t,a,o,u,i,f,w=[],b=0;w=e||[0];if(r=r||0,e=r>>>3,-1===n.search(/^[a-zA-Z0-9=+\/]+$/))throw Error("Invalid character in base-64 string");if(a=n.indexOf("="),n=n.replace(/\=/g,""),-1!==a&&a<n.length)throw Error("Invalid '=' found in base-64 string");for(a=0;a<n.length;a+=4){for(i=n.substr(a,4),o=u=0;o<i.length;o+=1)t="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".indexOf(i[o]),u|=t<<18-6*o;for(o=0;o<i.length-1;o+=1){for(f=b+e,t=f>>>2;w.length<=t;)w.push(0);w[t]|=(u>>>16-8*o&255)<<8*(3-f%4),b+=1}}return{value:w,binLen:8*b+r}}function u(n,e){var r,t,a="",o=4*n.length;for(r=0;r<o;r+=1)t=n[r>>>2]>>>8*(3-r%4),a+="0123456789abcdef".charAt(t>>>4&15)+"0123456789abcdef".charAt(15&t);return e.outputUpper?a.toUpperCase():a}function i(n,e){var r,t,a,o="",u=4*n.length;for(r=0;r<u;r+=3)for(a=r+1>>>2,t=n.length<=a?0:n[a],a=r+2>>>2,a=n.length<=a?0:n[a],a=(n[r>>>2]>>>8*(3-r%4)&255)<<16|(t>>>8*(3-(r+1)%4)&255)<<8|a>>>8*(3-(r+2)%4)&255,t=0;4>t;t+=1)8*r+6*t<=32*n.length?o+="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(a>>>6*(3-t)&63):o+=e.b64Pad;return o}function f(n){var e,r,t="",a=4*n.length;for(e=0;e<a;e+=1)r=n[e>>>2]>>>8*(3-e%4)&255,t+=String.fromCharCode(r);return t}function w(n){var e={outputUpper:!1,b64Pad:"="};if(n=n||{},e.outputUpper=n.outputUpper||!1,!0===n.hasOwnProperty("b64Pad")&&(e.b64Pad=n.b64Pad),"boolean"!==typeof e.outputUpper)throw Error("Invalid outputUpper formatting option");if("string"!==typeof e.b64Pad)throw Error("Invalid b64Pad formatting option");return e}function b(n,e){var r;switch(e){case"UTF8":case"UTF16BE":case"UTF16LE":break;default:throw Error("encoding must be UTF8, UTF16BE, or UTF16LE")}switch(n){case"HEX":r=t;break;case"TEXT":r=function(n,r,t){var a,o,u,i,f,w=[],b=[],s=0;w=r||[0];if(r=t||0,u=r>>>3,"UTF8"===e)for(a=0;a<n.length;a+=1)for(t=n.charCodeAt(a),b=[],128>t?b.push(t):2048>t?(b.push(192|t>>>6),b.push(128|63&t)):55296>t||57344<=t?b.push(224|t>>>12,128|t>>>6&63,128|63&t):(a+=1,t=65536+((1023&t)<<10|1023&n.charCodeAt(a)),b.push(240|t>>>18,128|t>>>12&63,128|t>>>6&63,128|63&t)),o=0;o<b.length;o+=1){for(f=s+u,i=f>>>2;w.length<=i;)w.push(0);w[i]|=b[o]<<8*(3-f%4),s+=1}else if("UTF16BE"===e||"UTF16LE"===e)for(a=0;a<n.length;a+=1){for(t=n.charCodeAt(a),"UTF16LE"===e&&(o=255&t,t=o<<8|t>>>8),f=s+u,i=f>>>2;w.length<=i;)w.push(0);w[i]|=t<<8*(2-f%4),s+=2}return{value:w,binLen:8*s+r}};break;case"B64":r=o;break;case"BYTES":r=a;break;default:throw Error("format must be HEX, TEXT, B64, or BYTES")}return r}function s(n,e){return n<<e|n>>>32-e}function c(n,e){return n>>>e|n<<32-e}function h(n,e){var t=null;t=new r(n.a,n.b);return 32>=e?new r(t.a>>>e|t.b<<32-e&4294967295,t.b>>>e|t.a<<32-e&4294967295):new r(t.b>>>e-32|t.a<<64-e&4294967295,t.a>>>e-32|t.b<<64-e&4294967295)}function l(n,e){return 32>=e?new r(n.a>>>e,n.b>>>e|n.a<<32-e&4294967295):new r(0,n.a>>>e-32)}function p(n,e,r){return n&e^~n&r}function d(n,e,t){return new r(n.a&e.a^~n.a&t.a,n.b&e.b^~n.b&t.b)}function g(n,e,r){return n&e^n&r^e&r}function H(n,e,t){return new r(n.a&e.a^n.a&t.a^e.a&t.a,n.b&e.b^n.b&t.b^e.b&t.b)}function v(n){return c(n,2)^c(n,13)^c(n,22)}function A(n){var e=h(n,28),t=h(n,34);return n=h(n,39),new r(e.a^t.a^n.a,e.b^t.b^n.b)}function E(n){return c(n,6)^c(n,11)^c(n,25)}function S(n){var e=h(n,14),t=h(n,18);return n=h(n,41),new r(e.a^t.a^n.a,e.b^t.b^n.b)}function m(n){return c(n,7)^c(n,18)^n>>>3}function U(n){var e=h(n,1),t=h(n,8);return n=l(n,7),new r(e.a^t.a^n.a,e.b^t.b^n.b)}function T(n){return c(n,17)^c(n,19)^n>>>10}function k(n){var e=h(n,19),t=h(n,61);return n=l(n,6),new r(e.a^t.a^n.a,e.b^t.b^n.b)}function C(n,e){var r=(65535&n)+(65535&e);return((n>>>16)+(e>>>16)+(r>>>16)&65535)<<16|65535&r}function y(n,e,r,t){var a=(65535&n)+(65535&e)+(65535&r)+(65535&t);return((n>>>16)+(e>>>16)+(r>>>16)+(t>>>16)+(a>>>16)&65535)<<16|65535&a}function B(n,e,r,t,a){var o=(65535&n)+(65535&e)+(65535&r)+(65535&t)+(65535&a);return((n>>>16)+(e>>>16)+(r>>>16)+(t>>>16)+(a>>>16)+(o>>>16)&65535)<<16|65535&o}function F(n,e){var t,a,o;return t=(65535&n.b)+(65535&e.b),a=(n.b>>>16)+(e.b>>>16)+(t>>>16),o=(65535&a)<<16|65535&t,t=(65535&n.a)+(65535&e.a)+(a>>>16),a=(n.a>>>16)+(e.a>>>16)+(t>>>16),new r((65535&a)<<16|65535&t,o)}function x(n,e,t,a){var o,u,i;return o=(65535&n.b)+(65535&e.b)+(65535&t.b)+(65535&a.b),u=(n.b>>>16)+(e.b>>>16)+(t.b>>>16)+(a.b>>>16)+(o>>>16),i=(65535&u)<<16|65535&o,o=(65535&n.a)+(65535&e.a)+(65535&t.a)+(65535&a.a)+(u>>>16),u=(n.a>>>16)+(e.a>>>16)+(t.a>>>16)+(a.a>>>16)+(o>>>16),new r((65535&u)<<16|65535&o,i)}function L(n,e,t,a,o){var u,i,f;return u=(65535&n.b)+(65535&e.b)+(65535&t.b)+(65535&a.b)+(65535&o.b),i=(n.b>>>16)+(e.b>>>16)+(t.b>>>16)+(a.b>>>16)+(o.b>>>16)+(u>>>16),f=(65535&i)<<16|65535&u,u=(65535&n.a)+(65535&e.a)+(65535&t.a)+(65535&a.a)+(65535&o.a)+(i>>>16),i=(n.a>>>16)+(e.a>>>16)+(t.a>>>16)+(a.a>>>16)+(o.a>>>16)+(u>>>16),new r((65535&i)<<16|65535&u,f)}function X(n){var e,t;if("SHA-1"===n)n=[1732584193,4023233417,2562383102,271733878,3285377520];else switch(e=[3238371032,914150663,812702999,4144912697,4290775857,1750603025,1694076839,3204075428],t=[1779033703,3144134277,1013904242,2773480762,1359893119,2600822924,528734635,1541459225],n){case"SHA-224":n=e;break;case"SHA-256":n=t;break;case"SHA-384":n=[new r(3418070365,e[0]),new r(1654270250,e[1]),new r(2438529370,e[2]),new r(355462360,e[3]),new r(1731405415,e[4]),new r(41048885895,e[5]),new r(3675008525,e[6]),new r(1203062813,e[7])];break;case"SHA-512":n=[new r(t[0],4089235720),new r(t[1],2227873595),new r(t[2],4271175723),new r(t[3],1595750129),new r(t[4],2917565137),new r(t[5],725511199),new r(t[6],4215389547),new r(t[7],327033209)];break;default:throw Error("Unknown SHA variant")}return n}function M(n,e){var r,t,a,o,u,i,f,w=[];for(r=e[0],t=e[1],a=e[2],o=e[3],u=e[4],f=0;80>f;f+=1)w[f]=16>f?n[f]:s(w[f-3]^w[f-8]^w[f-14]^w[f-16],1),i=20>f?B(s(r,5),t&a^~t&o,u,1518500249,w[f]):40>f?B(s(r,5),t^a^o,u,1859775393,w[f]):60>f?B(s(r,5),g(t,a,o),u,2400959708,w[f]):B(s(r,5),t^a^o,u,3395469782,w[f]),u=o,o=a,a=s(t,30),t=r,r=i;return e[0]=C(r,e[0]),e[1]=C(t,e[1]),e[2]=C(a,e[2]),e[3]=C(o,e[3]),e[4]=C(u,e[4]),e}function P(n,e,r,t){var a;for(a=15+(e+65>>>9<<4);n.length<=a;)n.push(0);for(n[e>>>5]|=128<<24-e%32,n[a]=e+r,r=n.length,e=0;e<r;e+=16)t=M(n.slice(e,e+16),t);return t}function I(n,e,t){var a,o,u,i,f,w,b,s,c,h,l,X,M,P,I,O,z,R,j,K,Z,q,D,G=[];if("SHA-224"===t||"SHA-256"===t)h=64,X=1,q=Number,M=C,P=y,I=B,O=m,z=T,R=v,j=E,Z=g,K=p,D=Y;else{if("SHA-384"!==t&&"SHA-512"!==t)throw Error("Unexpected error in SHA-2 implementation");h=80,X=2,q=r,M=F,P=x,I=L,O=U,z=k,R=A,j=S,Z=H,K=d,D=N}for(t=e[0],a=e[1],o=e[2],u=e[3],i=e[4],f=e[5],w=e[6],b=e[7],l=0;l<h;l+=1)16>l?(c=l*X,s=n.length<=c?0:n[c],c=n.length<=c+1?0:n[c+1],G[l]=new q(s,c)):G[l]=P(z(G[l-2]),G[l-7],O(G[l-15]),G[l-16]),s=I(b,j(i),K(i,f,w),D[l],G[l]),c=M(R(t),Z(t,a,o)),b=w,w=f,f=i,i=M(u,s),u=o,o=a,a=t,t=M(s,c);return e[0]=M(t,e[0]),e[1]=M(a,e[1]),e[2]=M(o,e[2]),e[3]=M(u,e[3]),e[4]=M(i,e[4]),e[5]=M(f,e[5]),e[6]=M(w,e[6]),e[7]=M(b,e[7]),e}var Y,N;Y=[1116352408,1899447441,3049323471,3921009573,961987163,1508970993,2453635748,2870763221,3624381080,310598401,607225278,1426881987,1925078388,2162078206,2614888103,3248222580,3835390401,4022224774,264347078,604807628,770255983,1249150122,1555081692,1996064986,2554220882,2821834349,2952996808,3210313671,3336571891,3584528711,113926993,338241895,666307205,773529912,1294757372,1396182291,1695183700,1986661051,2177026350,2456956037,2730485921,2820302411,3259730800,3345764771,3516065817,3600352804,4094571909,275423344,430227734,506948616,659060556,883997877,958139571,1322822218,1537002063,1747873779,1955562222,2024104815,2227730452,2361852424,2428436474,2756734187,3204031479,3329325298],N=[new r(Y[0],3609767458),new r(Y[1],602891725),new r(Y[2],3964484399),new r(Y[3],2173295548),new r(Y[4],4081628472),new r(Y[5],3053834265),new r(Y[6],2937671579),new r(Y[7],3664609560),new r(Y[8],2734883394),new r(Y[9],1164996542),new r(Y[10],1323610764),new r(Y[11],3590304994),new r(Y[12],4068182383),new r(Y[13],991336113),new r(Y[14],633803317),new r(Y[15],3479774868),new r(Y[16],2666613458),new r(Y[17],944711139),new r(Y[18],2341262773),new r(Y[19],2007800933),new r(Y[20],1495990901),new r(Y[21],1856431235),new r(Y[22],3175218132),new r(Y[23],2198950837),new r(Y[24],3999719339),new r(Y[25],766784016),new r(Y[26],2566594879),new r(Y[27],3203337956),new r(Y[28],1034457026),new r(Y[29],2466948901),new r(Y[30],3758326383),new r(Y[31],168717936),new r(Y[32],1188179964),new r(Y[33],1546045734),new r(Y[34],1522805485),new r(Y[35],2643833823),new r(Y[36],2343527390),new r(Y[37],1014477480),new r(Y[38],1206759142),new r(Y[39],344077627),new r(Y[40],1290863460),new r(Y[41],3158454273),new r(Y[42],3505952657),new r(Y[43],106217008),new r(Y[44],3606008344),new r(Y[45],1432725776),new r(Y[46],1467031594),new r(Y[47],851169720),new r(Y[48],3100823752),new r(Y[49],1363258195),new r(Y[50],3750685593),new r(Y[51],3785050280),new r(Y[52],3318307427),new r(Y[53],3812723403),new r(Y[54],2003034995),new r(Y[55],3602036899),new r(Y[56],1575990012),new r(Y[57],1125592928),new r(Y[58],2716904306),new r(Y[59],442776044),new r(Y[60],593698344),new r(Y[61],3733110249),new r(Y[62],2999351573),new r(Y[63],3815920427),new r(3391569614,3928383900),new r(3515267271,566280711),new r(3940187606,3454069534),new r(4118630271,4000239992),new r(116418474,1914138554),new r(174292421,2731055270),new r(289380356,3203993006),new r(460393269,320620315),new r(685471733,587496836),new r(852142971,1086792851),new r(1017036298,365543100),new r(1126000580,2618297676),new r(1288033470,3409855158),new r(1501505948,4234509866),new r(1607167915,987167468),new r(1816402316,1246189591)],"function"===typeof define&&define.amd?define((function(){return e})):"undefined"!==typeof exports?"undefined"!==typeof module&&module.exports?module.exports=exports=e:exports=e:n.jsSHA=e})(this);