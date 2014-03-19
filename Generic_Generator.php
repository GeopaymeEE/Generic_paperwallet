<?php

$qr_pub_w = $_POST['qr_pub_w'];
$qr_pub_h = $_POST['qr_pub_h'];
$qr_priv_w = $_POST['qr_priv_w'];
$qr_priv_h = $_POST['qr_priv_h'];
$qr_pub_pos_t = $_POST['qr_pub_pos_t'];
$qr_pub_pos_l = $_POST['qr_pub_pos_l'];
$qr_priv_pos_t = $_POST['qr_priv_pos_t'];
$qr_priv_pos_l = $_POST['qr_priv_pos_l'];
$img_h = $_POST['img_h'];
$img_w = $_POST['img_w'];
$path = $_POST['img'];

$test = (explode('p', $qr_pub_w));
$new = (int)$test[0] + 2;
$qr_pub_w = $new . 'px';

$test = (explode('p', $qr_pub_h));
$new = (int)$test[0] - 2;
$qr_pub_h = $new . 'px';

$test = (explode('p', $qr_priv_h));
$new = (int)$test[0] - 2;
$qr_priv_h = $new . 'px';

$test = (explode('p', $qr_priv_w));
$new = (int)$test[0] + 2;
$qr_priv_w = $new . 'px';


$length = 10;

$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

$randomString;


$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);


?>

<!doctype html>
<html>
<head>
<link rel="shortcut icon" href="http://i.imgur.com/nOTkFaU.png">
	<!--
	Donation Address: 1NiNja1bUmhSoTXozBRBEtR8LeF9TGbZBN

	Notice of Copyrights and Licenses:
	***********************************
	The bitaddress.org project, software and embedded resources are copyright bitaddress.org (pointbiz). 
	The bitaddress.org name and logo are not part of the open source license.

	Portions of the all-in-one HTML document contain JavaScript codes that are the copyrights of others. 
	The individual copyrights are included throughout the document along with their licenses.
	Included JavaScript libraries are separated with HTML script tags.

	Summary of JavaScript functions with a redistributable license:
	JavaScript function		License
	*******************		***************
	Array.prototype.map		Public Domain
	window.Crypto			BSD License
	window.SecureRandom		BSD License
	window.EllipticCurve		BSD License
	window.BigInteger		BSD License
	window.QRCode			MIT License
	window.Bitcoin			MIT License
	window.Crypto_scrypt		MIT License

	The bitaddress.org software is available under The MIT License (MIT)
	Copyright (c) 2011-2013 bitaddress.org (pointbiz)

	Permission is hereby granted, free of charge, to any person obtaining a copy of this software and 
	associated documentation files (the "Software"), to deal in the Software without restriction, including 
	without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or 
	sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject 
	to the following conditions:

	The above copyright notice and this permission notice shall be included in all copies or substantial 
	portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT 
	LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. 
	IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, 
	WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE 
	SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

	GitHub Repository: https://github.com/pointbiz/bitaddress.org
	-->

	<title>Cryptowallets.org</title>
	<meta charset="utf-8">

	<script type="text/javascript">
// Array.prototype.map function is in the public domain.
// Production steps of ECMA-262, Edition 5, 15.4.4.19  
// Reference: http://es5.github.com/#x15.4.4.19  
if (!Array.prototype.map) {
	Array.prototype.map = function (callback, thisArg) {
		var T, A, k;
		if (this == null) {
			throw new TypeError(" this is null or not defined");
		}
		// 1. Let O be the result of calling ToObject passing the |this| value as the argument.  
		var O = Object(this);
		// 2. Let lenValue be the result of calling the Get internal method of O with the argument "length".  
		// 3. Let len be ToUint32(lenValue).  
		var len = O.length >>> 0;
		// 4. If IsCallable(callback) is false, throw a TypeError exception.  
		// See: http://es5.github.com/#x9.11  
		if ({}.toString.call(callback) != "[object Function]") {
			throw new TypeError(callback + " is not a function");
		}
		// 5. If thisArg was supplied, let T be thisArg; else let T be undefined.  
		if (thisArg) {
			T = thisArg;
		}
		// 6. Let A be a new array created as if by the expression new Array(len) where Array is  
		// the standard built-in constructor with that name and len is the value of len.  
		A = new Array(len);
		// 7. Let k be 0  
		k = 0;
		// 8. Repeat, while k < len  
		while (k < len) {
			var kValue, mappedValue;
			// a. Let Pk be ToString(k).  
			//   This is implicit for LHS operands of the in operator  
			// b. Let kPresent be the result of calling the HasProperty internal method of O with argument Pk.  
			//   This step can be combined with c  
			// c. If kPresent is true, then  
			if (k in O) {
				// i. Let kValue be the result of calling the Get internal method of O with argument Pk.  
				kValue = O[k];
				// ii. Let mappedValue be the result of calling the Call internal method of callback  
				// with T as the this value and argument list containing kValue, k, and O.  
				mappedValue = callback.call(T, kValue, k, O);
				// iii. Call the DefineOwnProperty internal method of A with arguments  
				// Pk, Property Descriptor {Value: mappedValue, Writable: true, Enumerable: true, Configurable: true},  
				// and false.  
				// In browsers that support Object.defineProperty, use the following:  
				// Object.defineProperty(A, Pk, { value: mappedValue, writable: true, enumerable: true, configurable: true });  
				// For best browser support, use the following:  
				A[k] = mappedValue;
			}
			// d. Increase k by 1.  
			k++;
		}
		// 9. return A  
		return A;
	};
}
	</script>
	<script type="text/javascript">
/*!
* Crypto-JS v2.5.4	Crypto.js
* http://code.google.com/p/crypto-js/
* Copyright (c) 2009-2013, Jeff Mott. All rights reserved.
* http://code.google.com/p/crypto-js/wiki/License
*/
if (typeof Crypto == "undefined" || !Crypto.util) {
	(function () {

		var base64map = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";

		// Global Crypto object
		var Crypto = window.Crypto = {};

		// Crypto utilities
		var util = Crypto.util = {

			// Bit-wise rotate left
			rotl: function (n, b) {
				return (n << b) | (n >>> (32 - b));
			},

			// Bit-wise rotate right
			rotr: function (n, b) {
				return (n << (32 - b)) | (n >>> b);
			},

			// Swap big-endian to little-endian and vice versa
			endian: function (n) {

				// If number given, swap endian
				if (n.constructor == Number) {
					return util.rotl(n, 8) & 0x00FF00FF |
			    util.rotl(n, 24) & 0xFF00FF00;
				}

				// Else, assume array and swap all items
				for (var i = 0; i < n.length; i++)
					n[i] = util.endian(n[i]);
				return n;

			},

			// Generate an array of any length of random bytes
			randomBytes: function (n) {
				for (var bytes = []; n > 0; n--)
					bytes.push(Math.floor(Math.random() * 256));
				return bytes;
			},

			// Convert a byte array to big-endian 32-bit words
			bytesToWords: function (bytes) {
				for (var words = [], i = 0, b = 0; i < bytes.length; i++, b += 8)
					words[b >>> 5] |= (bytes[i] & 0xFF) << (24 - b % 32);
				return words;
			},

			// Convert big-endian 32-bit words to a byte array
			wordsToBytes: function (words) {
				for (var bytes = [], b = 0; b < words.length * 32; b += 8)
					bytes.push((words[b >>> 5] >>> (24 - b % 32)) & 0xFF);
				return bytes;
			},

			// Convert a byte array to a hex string
			bytesToHex: function (bytes) {
				for (var hex = [], i = 0; i < bytes.length; i++) {
					hex.push((bytes[i] >>> 4).toString(16));
					hex.push((bytes[i] & 0xF).toString(16));
				}
				return hex.join("");
			},

			// Convert a hex string to a byte array
			hexToBytes: function (hex) {
				for (var bytes = [], c = 0; c < hex.length; c += 2)
					bytes.push(parseInt(hex.substr(c, 2), 16));
				return bytes;
			},

			// Convert a byte array to a base-64 string
			bytesToBase64: function (bytes) {
				for (var base64 = [], i = 0; i < bytes.length; i += 3) {
					var triplet = (bytes[i] << 16) | (bytes[i + 1] << 8) | bytes[i + 2];
					for (var j = 0; j < 4; j++) {
						if (i * 8 + j * 6 <= bytes.length * 8)
							base64.push(base64map.charAt((triplet >>> 6 * (3 - j)) & 0x3F));
						else base64.push("=");
					}
				}

				return base64.join("");
			},

			// Convert a base-64 string to a byte array
			base64ToBytes: function (base64) {
				// Remove non-base-64 characters
				base64 = base64.replace(/[^A-Z0-9+\/]/ig, "");

				for (var bytes = [], i = 0, imod4 = 0; i < base64.length; imod4 = ++i % 4) {
					if (imod4 == 0) continue;
					bytes.push(((base64map.indexOf(base64.charAt(i - 1)) & (Math.pow(2, -2 * imod4 + 8) - 1)) << (imod4 * 2)) |
			        (base64map.indexOf(base64.charAt(i)) >>> (6 - imod4 * 2)));
				}

				return bytes;
			}

		};

		// Crypto character encodings
		var charenc = Crypto.charenc = {};

		// UTF-8 encoding
		var UTF8 = charenc.UTF8 = {

			// Convert a string to a byte array
			stringToBytes: function (str) {
				return Binary.stringToBytes(unescape(encodeURIComponent(str)));
			},

			// Convert a byte array to a string
			bytesToString: function (bytes) {
				return decodeURIComponent(escape(Binary.bytesToString(bytes)));
			}

		};

		// Binary encoding
		var Binary = charenc.Binary = {

			// Convert a string to a byte array
			stringToBytes: function (str) {
				for (var bytes = [], i = 0; i < str.length; i++)
					bytes.push(str.charCodeAt(i) & 0xFF);
				return bytes;
			},

			// Convert a byte array to a string
			bytesToString: function (bytes) {
				for (var str = [], i = 0; i < bytes.length; i++)
					str.push(String.fromCharCode(bytes[i]));
				return str.join("");
			}

		};

	})();
}	
	</script>
	<script type="text/javascript">
/*!
* Crypto-JS v2.5.4	SHA256.js
* http://code.google.com/p/crypto-js/
* Copyright (c) 2009-2013, Jeff Mott. All rights reserved.
* http://code.google.com/p/crypto-js/wiki/License
*/
(function () {

	// Shortcuts
	var C = Crypto,
		util = C.util,
		charenc = C.charenc,
		UTF8 = charenc.UTF8,
		Binary = charenc.Binary;

	// Constants
	var K = [0x428A2F98, 0x71374491, 0xB5C0FBCF, 0xE9B5DBA5,
        0x3956C25B, 0x59F111F1, 0x923F82A4, 0xAB1C5ED5,
        0xD807AA98, 0x12835B01, 0x243185BE, 0x550C7DC3,
        0x72BE5D74, 0x80DEB1FE, 0x9BDC06A7, 0xC19BF174,
        0xE49B69C1, 0xEFBE4786, 0x0FC19DC6, 0x240CA1CC,
        0x2DE92C6F, 0x4A7484AA, 0x5CB0A9DC, 0x76F988DA,
        0x983E5152, 0xA831C66D, 0xB00327C8, 0xBF597FC7,
        0xC6E00BF3, 0xD5A79147, 0x06CA6351, 0x14292967,
        0x27B70A85, 0x2E1B2138, 0x4D2C6DFC, 0x53380D13,
        0x650A7354, 0x766A0ABB, 0x81C2C92E, 0x92722C85,
        0xA2BFE8A1, 0xA81A664B, 0xC24B8B70, 0xC76C51A3,
        0xD192E819, 0xD6990624, 0xF40E3585, 0x106AA070,
        0x19A4C116, 0x1E376C08, 0x2748774C, 0x34B0BCB5,
        0x391C0CB3, 0x4ED8AA4A, 0x5B9CCA4F, 0x682E6FF3,
        0x748F82EE, 0x78A5636F, 0x84C87814, 0x8CC70208,
        0x90BEFFFA, 0xA4506CEB, 0xBEF9A3F7, 0xC67178F2];

	// Public API
	var SHA256 = C.SHA256 = function (message, options) {
		var digestbytes = util.wordsToBytes(SHA256._sha256(message));
		return options && options.asBytes ? digestbytes :
	    options && options.asString ? Binary.bytesToString(digestbytes) :
	    util.bytesToHex(digestbytes);
	};

	// The core
	SHA256._sha256 = function (message) {

		// Convert to byte array
		if (message.constructor == String) message = UTF8.stringToBytes(message);
		/* else, assume byte array already */

		var m = util.bytesToWords(message),
		l = message.length * 8,
		H = [0x6A09E667, 0xBB67AE85, 0x3C6EF372, 0xA54FF53A,
				0x510E527F, 0x9B05688C, 0x1F83D9AB, 0x5BE0CD19],
		w = [],
		a, b, c, d, e, f, g, h, i, j,
		t1, t2;

		// Padding
		m[l >> 5] |= 0x80 << (24 - l % 32);
		m[((l + 64 >> 9) << 4) + 15] = l;

		for (var i = 0; i < m.length; i += 16) {

			a = H[0];
			b = H[1];
			c = H[2];
			d = H[3];
			e = H[4];
			f = H[5];
			g = H[6];
			h = H[7];

			for (var j = 0; j < 64; j++) {

				if (j < 16) w[j] = m[j + i];
				else {

					var gamma0x = w[j - 15],
				gamma1x = w[j - 2],
				gamma0 = ((gamma0x << 25) | (gamma0x >>> 7)) ^
				            ((gamma0x << 14) | (gamma0x >>> 18)) ^
				            (gamma0x >>> 3),
				gamma1 = ((gamma1x << 15) | (gamma1x >>> 17)) ^
				            ((gamma1x << 13) | (gamma1x >>> 19)) ^
				            (gamma1x >>> 10);

					w[j] = gamma0 + (w[j - 7] >>> 0) +
				    gamma1 + (w[j - 16] >>> 0);

				}

				var ch = e & f ^ ~e & g,
			maj = a & b ^ a & c ^ b & c,
			sigma0 = ((a << 30) | (a >>> 2)) ^
			            ((a << 19) | (a >>> 13)) ^
			            ((a << 10) | (a >>> 22)),
			sigma1 = ((e << 26) | (e >>> 6)) ^
			            ((e << 21) | (e >>> 11)) ^
			            ((e << 7) | (e >>> 25));


				t1 = (h >>> 0) + sigma1 + ch + (K[j]) + (w[j] >>> 0);
				t2 = sigma0 + maj;

				h = g;
				g = f;
				f = e;
				e = (d + t1) >>> 0;
				d = c;
				c = b;
				b = a;
				a = (t1 + t2) >>> 0;

			}

			H[0] += a;
			H[1] += b;
			H[2] += c;
			H[3] += d;
			H[4] += e;
			H[5] += f;
			H[6] += g;
			H[7] += h;

		}

		return H;

	};

	// Package private blocksize
	SHA256._blocksize = 16;

	SHA256._digestsize = 32;

})();	
	</script>
	<script type="text/javascript">
/*!
* Crypto-JS v2.5.4	PBKDF2.js
* http://code.google.com/p/crypto-js/
* Copyright (c) 2009-2013, Jeff Mott. All rights reserved.
* http://code.google.com/p/crypto-js/wiki/License
*/
(function () {

	// Shortcuts
	var C = Crypto,
		util = C.util,
		charenc = C.charenc,
		UTF8 = charenc.UTF8,
		Binary = charenc.Binary;

	C.PBKDF2 = function (password, salt, keylen, options) {

		// Convert to byte arrays
		if (password.constructor == String) password = UTF8.stringToBytes(password);
		if (salt.constructor == String) salt = UTF8.stringToBytes(salt);
		/* else, assume byte arrays already */

		// Defaults
		var hasher = options && options.hasher || C.SHA1,
			iterations = options && options.iterations || 1;

		// Pseudo-random function
		function PRF(password, salt) {
			return C.HMAC(hasher, salt, password, { asBytes: true });
		}

		// Generate key
		var derivedKeyBytes = [],
			blockindex = 1;
		while (derivedKeyBytes.length < keylen) {
			var block = PRF(password, salt.concat(util.wordsToBytes([blockindex])));
			for (var u = block, i = 1; i < iterations; i++) {
				u = PRF(password, u);
				for (var j = 0; j < block.length; j++) block[j] ^= u[j];
			}
			derivedKeyBytes = derivedKeyBytes.concat(block);
			blockindex++;
		}

		// Truncate excess bytes
		derivedKeyBytes.length = keylen;

		return options && options.asBytes ? derivedKeyBytes :
		options && options.asString ? Binary.bytesToString(derivedKeyBytes) :
		util.bytesToHex(derivedKeyBytes);

	};

})(); 
	</script>
	<script type="text/javascript">
/*!
* Crypto-JS v2.5.4	HMAC.js
* http://code.google.com/p/crypto-js/
* Copyright (c) 2009-2013, Jeff Mott. All rights reserved.
* http://code.google.com/p/crypto-js/wiki/License
*/
(function () {

	// Shortcuts
	var C = Crypto,
		util = C.util,
		charenc = C.charenc,
		UTF8 = charenc.UTF8,
		Binary = charenc.Binary;

	C.HMAC = function (hasher, message, key, options) {

		// Convert to byte arrays
		if (message.constructor == String) message = UTF8.stringToBytes(message);
		if (key.constructor == String) key = UTF8.stringToBytes(key);
		/* else, assume byte arrays already */

		// Allow arbitrary length keys
		if (key.length > hasher._blocksize * 4)
			key = hasher(key, { asBytes: true });

		// XOR keys with pad constants
		var okey = key.slice(0),
			ikey = key.slice(0);
		for (var i = 0; i < hasher._blocksize * 4; i++) {
			okey[i] ^= 0x5C;
			ikey[i] ^= 0x36;
		}

		var hmacbytes = hasher(okey.concat(hasher(ikey.concat(message), { asBytes: true })), { asBytes: true });

		return options && options.asBytes ? hmacbytes :
		options && options.asString ? Binary.bytesToString(hmacbytes) :
		util.bytesToHex(hmacbytes);

	};

})();
	</script>
	<script type="text/javascript">
/*!
* Crypto-JS v2.5.4	AES.js
* http://code.google.com/p/crypto-js/
* Copyright (c) 2009-2013, Jeff Mott. All rights reserved.
* http://code.google.com/p/crypto-js/wiki/License
*/
(function () {

	// Shortcuts
	var C = Crypto,
		util = C.util,
		charenc = C.charenc,
		UTF8 = charenc.UTF8;

	// Precomputed SBOX
	var SBOX = [0x63, 0x7c, 0x77, 0x7b, 0xf2, 0x6b, 0x6f, 0xc5,
            0x30, 0x01, 0x67, 0x2b, 0xfe, 0xd7, 0xab, 0x76,
            0xca, 0x82, 0xc9, 0x7d, 0xfa, 0x59, 0x47, 0xf0,
            0xad, 0xd4, 0xa2, 0xaf, 0x9c, 0xa4, 0x72, 0xc0,
            0xb7, 0xfd, 0x93, 0x26, 0x36, 0x3f, 0xf7, 0xcc,
            0x34, 0xa5, 0xe5, 0xf1, 0x71, 0xd8, 0x31, 0x15,
            0x04, 0xc7, 0x23, 0xc3, 0x18, 0x96, 0x05, 0x9a,
            0x07, 0x12, 0x80, 0xe2, 0xeb, 0x27, 0xb2, 0x75,
            0x09, 0x83, 0x2c, 0x1a, 0x1b, 0x6e, 0x5a, 0xa0,
            0x52, 0x3b, 0xd6, 0xb3, 0x29, 0xe3, 0x2f, 0x84,
            0x53, 0xd1, 0x00, 0xed, 0x20, 0xfc, 0xb1, 0x5b,
            0x6a, 0xcb, 0xbe, 0x39, 0x4a, 0x4c, 0x58, 0xcf,
            0xd0, 0xef, 0xaa, 0xfb, 0x43, 0x4d, 0x33, 0x85,
            0x45, 0xf9, 0x02, 0x7f, 0x50, 0x3c, 0x9f, 0xa8,
            0x51, 0xa3, 0x40, 0x8f, 0x92, 0x9d, 0x38, 0xf5,
            0xbc, 0xb6, 0xda, 0x21, 0x10, 0xff, 0xf3, 0xd2,
            0xcd, 0x0c, 0x13, 0xec, 0x5f, 0x97, 0x44, 0x17,
            0xc4, 0xa7, 0x7e, 0x3d, 0x64, 0x5d, 0x19, 0x73,
            0x60, 0x81, 0x4f, 0xdc, 0x22, 0x2a, 0x90, 0x88,
            0x46, 0xee, 0xb8, 0x14, 0xde, 0x5e, 0x0b, 0xdb,
            0xe0, 0x32, 0x3a, 0x0a, 0x49, 0x06, 0x24, 0x5c,
            0xc2, 0xd3, 0xac, 0x62, 0x91, 0x95, 0xe4, 0x79,
            0xe7, 0xc8, 0x37, 0x6d, 0x8d, 0xd5, 0x4e, 0xa9,
            0x6c, 0x56, 0xf4, 0xea, 0x65, 0x7a, 0xae, 0x08,
            0xba, 0x78, 0x25, 0x2e, 0x1c, 0xa6, 0xb4, 0xc6,
            0xe8, 0xdd, 0x74, 0x1f, 0x4b, 0xbd, 0x8b, 0x8a,
            0x70, 0x3e, 0xb5, 0x66, 0x48, 0x03, 0xf6, 0x0e,
            0x61, 0x35, 0x57, 0xb9, 0x86, 0xc1, 0x1d, 0x9e,
            0xe1, 0xf8, 0x98, 0x11, 0x69, 0xd9, 0x8e, 0x94,
            0x9b, 0x1e, 0x87, 0xe9, 0xce, 0x55, 0x28, 0xdf,
            0x8c, 0xa1, 0x89, 0x0d, 0xbf, 0xe6, 0x42, 0x68,
            0x41, 0x99, 0x2d, 0x0f, 0xb0, 0x54, 0xbb, 0x16];

	// Compute inverse SBOX lookup table
	for (var INVSBOX = [], i = 0; i < 256; i++) INVSBOX[SBOX[i]] = i;

	// Compute multiplication in GF(2^8) lookup tables
	var MULT2 = [],
		MULT3 = [],
		MULT9 = [],
		MULTB = [],
		MULTD = [],
		MULTE = [];

	function xtime(a, b) {
		for (var result = 0, i = 0; i < 8; i++) {
			if (b & 1) result ^= a;
			var hiBitSet = a & 0x80;
			a = (a << 1) & 0xFF;
			if (hiBitSet) a ^= 0x1b;
			b >>>= 1;
		}
		return result;
	}

	for (var i = 0; i < 256; i++) {
		MULT2[i] = xtime(i, 2);
		MULT3[i] = xtime(i, 3);
		MULT9[i] = xtime(i, 9);
		MULTB[i] = xtime(i, 0xB);
		MULTD[i] = xtime(i, 0xD);
		MULTE[i] = xtime(i, 0xE);
	}

	// Precomputed RCon lookup
	var RCON = [0x00, 0x01, 0x02, 0x04, 0x08, 0x10, 0x20, 0x40, 0x80, 0x1b, 0x36];

	// Inner state
	var state = [[], [], [], []],
		keylength,
		nrounds,
		keyschedule;

	var AES = C.AES = {

		/**
		* Public API
		*/

		encrypt: function (message, password, options) {

			options = options || {};

			// Determine mode
			var mode = options.mode || new C.mode.OFB;

			// Allow mode to override options
			if (mode.fixOptions) mode.fixOptions(options);

			var 

			// Convert to bytes if message is a string
		m = (
			message.constructor == String ?
			UTF8.stringToBytes(message) :
			message
		),

			// Generate random IV
		iv = options.iv || util.randomBytes(AES._blocksize * 4),

			// Generate key
		k = (
			password.constructor == String ?
			// Derive key from pass-phrase
			C.PBKDF2(password, iv, 32, { asBytes: true }) :
			// else, assume byte array representing cryptographic key
			password
		);

			// Encrypt
			AES._init(k);
			mode.encrypt(AES, m, iv);

			// Return ciphertext
			m = options.iv ? m : iv.concat(m);
			return (options && options.asBytes) ? m : util.bytesToBase64(m);

		},

		decrypt: function (ciphertext, password, options) {

			options = options || {};

			// Determine mode
			var mode = options.mode || new C.mode.OFB;

			// Allow mode to override options
			if (mode.fixOptions) mode.fixOptions(options);

			var 

			// Convert to bytes if ciphertext is a string
		c = (
			ciphertext.constructor == String ?
			util.base64ToBytes(ciphertext) :
			ciphertext
		),

			// Separate IV and message
		iv = options.iv || c.splice(0, AES._blocksize * 4),

			// Generate key
		k = (
			password.constructor == String ?
			// Derive key from pass-phrase
			C.PBKDF2(password, iv, 32, { asBytes: true }) :
			// else, assume byte array representing cryptographic key
			password
		);

			// Decrypt
			AES._init(k);
			mode.decrypt(AES, c, iv);

			// Return plaintext
			return (options && options.asBytes) ? c : UTF8.bytesToString(c);

		},


		/**
		* Package private methods and properties
		*/

		_blocksize: 4,

		_encryptblock: function (m, offset) {

			// Set input
			for (var row = 0; row < AES._blocksize; row++) {
				for (var col = 0; col < 4; col++)
					state[row][col] = m[offset + col * 4 + row];
			}

			// Add round key
			for (var row = 0; row < 4; row++) {
				for (var col = 0; col < 4; col++)
					state[row][col] ^= keyschedule[col][row];
			}

			for (var round = 1; round < nrounds; round++) {

				// Sub bytes
				for (var row = 0; row < 4; row++) {
					for (var col = 0; col < 4; col++)
						state[row][col] = SBOX[state[row][col]];
				}

				// Shift rows
				state[1].push(state[1].shift());
				state[2].push(state[2].shift());
				state[2].push(state[2].shift());
				state[3].unshift(state[3].pop());

				// Mix columns
				for (var col = 0; col < 4; col++) {

					var s0 = state[0][col],
				s1 = state[1][col],
				s2 = state[2][col],
				s3 = state[3][col];

					state[0][col] = MULT2[s0] ^ MULT3[s1] ^ s2 ^ s3;
					state[1][col] = s0 ^ MULT2[s1] ^ MULT3[s2] ^ s3;
					state[2][col] = s0 ^ s1 ^ MULT2[s2] ^ MULT3[s3];
					state[3][col] = MULT3[s0] ^ s1 ^ s2 ^ MULT2[s3];

				}

				// Add round key
				for (var row = 0; row < 4; row++) {
					for (var col = 0; col < 4; col++)
						state[row][col] ^= keyschedule[round * 4 + col][row];
				}

			}

			// Sub bytes
			for (var row = 0; row < 4; row++) {
				for (var col = 0; col < 4; col++)
					state[row][col] = SBOX[state[row][col]];
			}

			// Shift rows
			state[1].push(state[1].shift());
			state[2].push(state[2].shift());
			state[2].push(state[2].shift());
			state[3].unshift(state[3].pop());

			// Add round key
			for (var row = 0; row < 4; row++) {
				for (var col = 0; col < 4; col++)
					state[row][col] ^= keyschedule[nrounds * 4 + col][row];
			}

			// Set output
			for (var row = 0; row < AES._blocksize; row++) {
				for (var col = 0; col < 4; col++)
					m[offset + col * 4 + row] = state[row][col];
			}

		},

		_decryptblock: function (c, offset) {

			// Set input
			for (var row = 0; row < AES._blocksize; row++) {
				for (var col = 0; col < 4; col++)
					state[row][col] = c[offset + col * 4 + row];
			}

			// Add round key
			for (var row = 0; row < 4; row++) {
				for (var col = 0; col < 4; col++)
					state[row][col] ^= keyschedule[nrounds * 4 + col][row];
			}

			for (var round = 1; round < nrounds; round++) {

				// Inv shift rows
				state[1].unshift(state[1].pop());
				state[2].push(state[2].shift());
				state[2].push(state[2].shift());
				state[3].push(state[3].shift());

				// Inv sub bytes
				for (var row = 0; row < 4; row++) {
					for (var col = 0; col < 4; col++)
						state[row][col] = INVSBOX[state[row][col]];
				}

				// Add round key
				for (var row = 0; row < 4; row++) {
					for (var col = 0; col < 4; col++)
						state[row][col] ^= keyschedule[(nrounds - round) * 4 + col][row];
				}

				// Inv mix columns
				for (var col = 0; col < 4; col++) {

					var s0 = state[0][col],
				s1 = state[1][col],
				s2 = state[2][col],
				s3 = state[3][col];

					state[0][col] = MULTE[s0] ^ MULTB[s1] ^ MULTD[s2] ^ MULT9[s3];
					state[1][col] = MULT9[s0] ^ MULTE[s1] ^ MULTB[s2] ^ MULTD[s3];
					state[2][col] = MULTD[s0] ^ MULT9[s1] ^ MULTE[s2] ^ MULTB[s3];
					state[3][col] = MULTB[s0] ^ MULTD[s1] ^ MULT9[s2] ^ MULTE[s3];

				}

			}

			// Inv shift rows
			state[1].unshift(state[1].pop());
			state[2].push(state[2].shift());
			state[2].push(state[2].shift());
			state[3].push(state[3].shift());

			// Inv sub bytes
			for (var row = 0; row < 4; row++) {
				for (var col = 0; col < 4; col++)
					state[row][col] = INVSBOX[state[row][col]];
			}

			// Add round key
			for (var row = 0; row < 4; row++) {
				for (var col = 0; col < 4; col++)
					state[row][col] ^= keyschedule[col][row];
			}

			// Set output
			for (var row = 0; row < AES._blocksize; row++) {
				for (var col = 0; col < 4; col++)
					c[offset + col * 4 + row] = state[row][col];
			}

		},


		/**
		* Private methods
		*/

		_init: function (k) {
			keylength = k.length / 4;
			nrounds = keylength + 6;
			AES._keyexpansion(k);
		},

		// Generate a key schedule
		_keyexpansion: function (k) {

			keyschedule = [];

			for (var row = 0; row < keylength; row++) {
				keyschedule[row] = [
			k[row * 4],
			k[row * 4 + 1],
			k[row * 4 + 2],
			k[row * 4 + 3]
		];
			}

			for (var row = keylength; row < AES._blocksize * (nrounds + 1); row++) {

				var temp = [
			keyschedule[row - 1][0],
			keyschedule[row - 1][1],
			keyschedule[row - 1][2],
			keyschedule[row - 1][3]
		];

				if (row % keylength == 0) {

					// Rot word
					temp.push(temp.shift());

					// Sub word
					temp[0] = SBOX[temp[0]];
					temp[1] = SBOX[temp[1]];
					temp[2] = SBOX[temp[2]];
					temp[3] = SBOX[temp[3]];

					temp[0] ^= RCON[row / keylength];

				} else if (keylength > 6 && row % keylength == 4) {

					// Sub word
					temp[0] = SBOX[temp[0]];
					temp[1] = SBOX[temp[1]];
					temp[2] = SBOX[temp[2]];
					temp[3] = SBOX[temp[3]];

				}

				keyschedule[row] = [
			keyschedule[row - keylength][0] ^ temp[0],
			keyschedule[row - keylength][1] ^ temp[1],
			keyschedule[row - keylength][2] ^ temp[2],
			keyschedule[row - keylength][3] ^ temp[3]
		];

			}

		}

	};

})();
	</script>
	<script type="text/javascript">
/*!
* Crypto-JS 2.5.4 BlockModes.js
* contribution from Simon Greatrix
*/

(function (C) {

	// Create pad namespace
	var C_pad = C.pad = {};

	// Calculate the number of padding bytes required.
	function _requiredPadding(cipher, message) {
		var blockSizeInBytes = cipher._blocksize * 4;
		var reqd = blockSizeInBytes - message.length % blockSizeInBytes;
		return reqd;
	}

	// Remove padding when the final byte gives the number of padding bytes.
	var _unpadLength = function (cipher, message, alg, padding) {
		var pad = message.pop();
		if (pad == 0) {
			throw new Error("Invalid zero-length padding specified for " + alg
			+ ". Wrong cipher specification or key used?");
		}
		var maxPad = cipher._blocksize * 4;
		if (pad > maxPad) {
			throw new Error("Invalid padding length of " + pad
			+ " specified for " + alg
			+ ". Wrong cipher specification or key used?");
		}
		for (var i = 1; i < pad; i++) {
			var b = message.pop();
			if (padding != undefined && padding != b) {
				throw new Error("Invalid padding byte of 0x" + b.toString(16)
				+ " specified for " + alg
				+ ". Wrong cipher specification or key used?");
			}
		}
	};

	// No-operation padding, used for stream ciphers
	C_pad.NoPadding = {
		pad: function (cipher, message) { },
		unpad: function (cipher, message) { }
	};

	// Zero Padding.
	//
	// If the message is not an exact number of blocks, the final block is
	// completed with 0x00 bytes. There is no unpadding.
	C_pad.ZeroPadding = {
		pad: function (cipher, message) {
			var blockSizeInBytes = cipher._blocksize * 4;
			var reqd = message.length % blockSizeInBytes;
			if (reqd != 0) {
				for (reqd = blockSizeInBytes - reqd; reqd > 0; reqd--) {
					message.push(0x00);
				}
			}
		},

		unpad: function (cipher, message) {
			while (message[message.length - 1] == 0) {
				message.pop();
			}
		}
	};

	// ISO/IEC 7816-4 padding.
	//
	// Pads the plain text with an 0x80 byte followed by as many 0x00
	// bytes are required to complete the block.
	C_pad.iso7816 = {
		pad: function (cipher, message) {
			var reqd = _requiredPadding(cipher, message);
			message.push(0x80);
			for (; reqd > 1; reqd--) {
				message.push(0x00);
			}
		},

		unpad: function (cipher, message) {
			var padLength;
			for (padLength = cipher._blocksize * 4; padLength > 0; padLength--) {
				var b = message.pop();
				if (b == 0x80) return;
				if (b != 0x00) {
					throw new Error("ISO-7816 padding byte must be 0, not 0x" + b.toString(16) + ". Wrong cipher specification or key used?");
				}
			}
			throw new Error("ISO-7816 padded beyond cipher block size. Wrong cipher specification or key used?");
		}
	};

	// ANSI X.923 padding
	//
	// The final block is padded with zeros except for the last byte of the
	// last block which contains the number of padding bytes.
	C_pad.ansix923 = {
		pad: function (cipher, message) {
			var reqd = _requiredPadding(cipher, message);
			for (var i = 1; i < reqd; i++) {
				message.push(0x00);
			}
			message.push(reqd);
		},

		unpad: function (cipher, message) {
			_unpadLength(cipher, message, "ANSI X.923", 0);
		}
	};

	// ISO 10126
	//
	// The final block is padded with random bytes except for the last
	// byte of the last block which contains the number of padding bytes.
	C_pad.iso10126 = {
		pad: function (cipher, message) {
			var reqd = _requiredPadding(cipher, message);
			for (var i = 1; i < reqd; i++) {
				message.push(Math.floor(Math.random() * 256));
			}
			message.push(reqd);
		},

		unpad: function (cipher, message) {
			_unpadLength(cipher, message, "ISO 10126", undefined);
		}
	};

	// PKCS7 padding
	//
	// PKCS7 is described in RFC 5652. Padding is in whole bytes. The
	// value of each added byte is the number of bytes that are added,
	// i.e. N bytes, each of value N are added.
	C_pad.pkcs7 = {
		pad: function (cipher, message) {
			var reqd = _requiredPadding(cipher, message);
			for (var i = 0; i < reqd; i++) {
				message.push(reqd);
			}
		},

		unpad: function (cipher, message) {
			_unpadLength(cipher, message, "PKCS 7", message[message.length - 1]);
		}
	};

	// Create mode namespace
	var C_mode = C.mode = {};

	/**
	* Mode base "class".
	*/
	var Mode = C_mode.Mode = function (padding) {
		if (padding) {
			this._padding = padding;
		}
	};

	Mode.prototype = {
		encrypt: function (cipher, m, iv) {
			this._padding.pad(cipher, m);
			this._doEncrypt(cipher, m, iv);
		},

		decrypt: function (cipher, m, iv) {
			this._doDecrypt(cipher, m, iv);
			this._padding.unpad(cipher, m);
		},

		// Default padding
		_padding: C_pad.iso7816
	};


	/**
	* Electronic Code Book mode.
	* 
	* ECB applies the cipher directly against each block of the input.
	* 
	* ECB does not require an initialization vector.
	*/
	var ECB = C_mode.ECB = function () {
		// Call parent constructor
		Mode.apply(this, arguments);
	};

	// Inherit from Mode
	var ECB_prototype = ECB.prototype = new Mode;

	// Concrete steps for Mode template
	ECB_prototype._doEncrypt = function (cipher, m, iv) {
		var blockSizeInBytes = cipher._blocksize * 4;
		// Encrypt each block
		for (var offset = 0; offset < m.length; offset += blockSizeInBytes) {
			cipher._encryptblock(m, offset);
		}
	};
	ECB_prototype._doDecrypt = function (cipher, c, iv) {
		var blockSizeInBytes = cipher._blocksize * 4;
		// Decrypt each block
		for (var offset = 0; offset < c.length; offset += blockSizeInBytes) {
			cipher._decryptblock(c, offset);
		}
	};

	// ECB never uses an IV
	ECB_prototype.fixOptions = function (options) {
		options.iv = [];
	};


	/**
	* Cipher block chaining
	* 
	* The first block is XORed with the IV. Subsequent blocks are XOR with the
	* previous cipher output.
	*/
	var CBC = C_mode.CBC = function () {
		// Call parent constructor
		Mode.apply(this, arguments);
	};

	// Inherit from Mode
	var CBC_prototype = CBC.prototype = new Mode;

	// Concrete steps for Mode template
	CBC_prototype._doEncrypt = function (cipher, m, iv) {
		var blockSizeInBytes = cipher._blocksize * 4;

		// Encrypt each block
		for (var offset = 0; offset < m.length; offset += blockSizeInBytes) {
			if (offset == 0) {
				// XOR first block using IV
				for (var i = 0; i < blockSizeInBytes; i++)
					m[i] ^= iv[i];
			} else {
				// XOR this block using previous crypted block
				for (var i = 0; i < blockSizeInBytes; i++)
					m[offset + i] ^= m[offset + i - blockSizeInBytes];
			}
			// Encrypt block
			cipher._encryptblock(m, offset);
		}
	};
	CBC_prototype._doDecrypt = function (cipher, c, iv) {
		var blockSizeInBytes = cipher._blocksize * 4;

		// At the start, the previously crypted block is the IV
		var prevCryptedBlock = iv;

		// Decrypt each block
		for (var offset = 0; offset < c.length; offset += blockSizeInBytes) {
			// Save this crypted block
			var thisCryptedBlock = c.slice(offset, offset + blockSizeInBytes);
			// Decrypt block
			cipher._decryptblock(c, offset);
			// XOR decrypted block using previous crypted block
			for (var i = 0; i < blockSizeInBytes; i++) {
				c[offset + i] ^= prevCryptedBlock[i];
			}
			prevCryptedBlock = thisCryptedBlock;
		}
	};


	/**
	* Cipher feed back
	* 
	* The cipher output is XORed with the plain text to produce the cipher output,
	* which is then fed back into the cipher to produce a bit pattern to XOR the
	* next block with.
	* 
	* This is a stream cipher mode and does not require padding.
	*/
	var CFB = C_mode.CFB = function () {
		// Call parent constructor
		Mode.apply(this, arguments);
	};

	// Inherit from Mode
	var CFB_prototype = CFB.prototype = new Mode;

	// Override padding
	CFB_prototype._padding = C_pad.NoPadding;

	// Concrete steps for Mode template
	CFB_prototype._doEncrypt = function (cipher, m, iv) {
		var blockSizeInBytes = cipher._blocksize * 4,
    keystream = iv.slice(0);

		// Encrypt each byte
		for (var i = 0; i < m.length; i++) {

			var j = i % blockSizeInBytes;
			if (j == 0) cipher._encryptblock(keystream, 0);

			m[i] ^= keystream[j];
			keystream[j] = m[i];
		}
	};
	CFB_prototype._doDecrypt = function (cipher, c, iv) {
		var blockSizeInBytes = cipher._blocksize * 4,
			keystream = iv.slice(0);

		// Encrypt each byte
		for (var i = 0; i < c.length; i++) {

			var j = i % blockSizeInBytes;
			if (j == 0) cipher._encryptblock(keystream, 0);

			var b = c[i];
			c[i] ^= keystream[j];
			keystream[j] = b;
		}
	};


	/**
	* Output feed back
	* 
	* The cipher repeatedly encrypts its own output. The output is XORed with the
	* plain text to produce the cipher text.
	* 
	* This is a stream cipher mode and does not require padding.
	*/
	var OFB = C_mode.OFB = function () {
		// Call parent constructor
		Mode.apply(this, arguments);
	};

	// Inherit from Mode
	var OFB_prototype = OFB.prototype = new Mode;

	// Override padding
	OFB_prototype._padding = C_pad.NoPadding;

	// Concrete steps for Mode template
	OFB_prototype._doEncrypt = function (cipher, m, iv) {

		var blockSizeInBytes = cipher._blocksize * 4,
			keystream = iv.slice(0);

		// Encrypt each byte
		for (var i = 0; i < m.length; i++) {

			// Generate keystream
			if (i % blockSizeInBytes == 0)
				cipher._encryptblock(keystream, 0);

			// Encrypt byte
			m[i] ^= keystream[i % blockSizeInBytes];

		}
	};
	OFB_prototype._doDecrypt = OFB_prototype._doEncrypt;

	/**
	* Counter
	* @author Gergely Risko
	*
	* After every block the last 4 bytes of the IV is increased by one
	* with carry and that IV is used for the next block.
	*
	* This is a stream cipher mode and does not require padding.
	*/
	var CTR = C_mode.CTR = function () {
		// Call parent constructor
		Mode.apply(this, arguments);
	};

	// Inherit from Mode
	var CTR_prototype = CTR.prototype = new Mode;

	// Override padding
	CTR_prototype._padding = C_pad.NoPadding;

	CTR_prototype._doEncrypt = function (cipher, m, iv) {
		var blockSizeInBytes = cipher._blocksize * 4;
		var counter = iv.slice(0);

		for (var i = 0; i < m.length; ) {
			// do not lose iv
			var keystream = counter.slice(0);

			// Generate keystream for next block
			cipher._encryptblock(keystream, 0);

			// XOR keystream with block
			for (var j = 0; i < m.length && j < blockSizeInBytes; j++, i++) {
				m[i] ^= keystream[j];
			}

			// Increase counter
			if (++(counter[blockSizeInBytes - 1]) == 256) {
				counter[blockSizeInBytes - 1] = 0;
				if (++(counter[blockSizeInBytes - 2]) == 256) {
					counter[blockSizeInBytes - 2] = 0;
					if (++(counter[blockSizeInBytes - 3]) == 256) {
						counter[blockSizeInBytes - 3] = 0;
						++(counter[blockSizeInBytes - 4]);
					}
				}
			}
		}
	};
	CTR_prototype._doDecrypt = CTR_prototype._doEncrypt;

})(Crypto);
	</script>
	<script type="text/javascript">
/*!
* Crypto-JS v2.0.0  RIPEMD-160
* http://code.google.com/p/crypto-js/
* Copyright (c) 2009, Jeff Mott. All rights reserved.
* http://code.google.com/p/crypto-js/wiki/License
*
* A JavaScript implementation of the RIPEMD-160 Algorithm
* Version 2.2 Copyright Jeremy Lin, Paul Johnston 2000 - 2009.
* Other contributors: Greg Holt, Andrew Kepert, Ydnar, Lostinet
* Distributed under the BSD License
* See http://pajhome.org.uk/crypt/md5 for details.
* Also http://www.ocf.berkeley.edu/~jjlin/jsotp/
* Ported to Crypto-JS by Stefan Thomas.
*/

(function () {
	// Shortcuts
	var C = Crypto,
	util = C.util,
	charenc = C.charenc,
	UTF8 = charenc.UTF8,
	Binary = charenc.Binary;

	// Convert a byte array to little-endian 32-bit words
	util.bytesToLWords = function (bytes) {

		var output = Array(bytes.length >> 2);
		for (var i = 0; i < output.length; i++)
			output[i] = 0;
		for (var i = 0; i < bytes.length * 8; i += 8)
			output[i >> 5] |= (bytes[i / 8] & 0xFF) << (i % 32);
		return output;
	};

	// Convert little-endian 32-bit words to a byte array
	util.lWordsToBytes = function (words) {
		var output = [];
		for (var i = 0; i < words.length * 32; i += 8)
			output.push((words[i >> 5] >>> (i % 32)) & 0xff);
		return output;
	};

	// Public API
	var RIPEMD160 = C.RIPEMD160 = function (message, options) {
		var digestbytes = util.lWordsToBytes(RIPEMD160._rmd160(message));
		return options && options.asBytes ? digestbytes :
			options && options.asString ? Binary.bytesToString(digestbytes) :
			util.bytesToHex(digestbytes);
	};

	// The core
	RIPEMD160._rmd160 = function (message) {
		// Convert to byte array
		if (message.constructor == String) message = UTF8.stringToBytes(message);

		var x = util.bytesToLWords(message),
			len = message.length * 8;

		/* append padding */
		x[len >> 5] |= 0x80 << (len % 32);
		x[(((len + 64) >>> 9) << 4) + 14] = len;

		var h0 = 0x67452301;
		var h1 = 0xefcdab89;
		var h2 = 0x98badcfe;
		var h3 = 0x10325476;
		var h4 = 0xc3d2e1f0;

		for (var i = 0; i < x.length; i += 16) {
			var T;
			var A1 = h0, B1 = h1, C1 = h2, D1 = h3, E1 = h4;
			var A2 = h0, B2 = h1, C2 = h2, D2 = h3, E2 = h4;
			for (var j = 0; j <= 79; ++j) {
				T = safe_add(A1, rmd160_f(j, B1, C1, D1));
				T = safe_add(T, x[i + rmd160_r1[j]]);
				T = safe_add(T, rmd160_K1(j));
				T = safe_add(bit_rol(T, rmd160_s1[j]), E1);
				A1 = E1; E1 = D1; D1 = bit_rol(C1, 10); C1 = B1; B1 = T;
				T = safe_add(A2, rmd160_f(79 - j, B2, C2, D2));
				T = safe_add(T, x[i + rmd160_r2[j]]);
				T = safe_add(T, rmd160_K2(j));
				T = safe_add(bit_rol(T, rmd160_s2[j]), E2);
				A2 = E2; E2 = D2; D2 = bit_rol(C2, 10); C2 = B2; B2 = T;
			}
			T = safe_add(h1, safe_add(C1, D2));
			h1 = safe_add(h2, safe_add(D1, E2));
			h2 = safe_add(h3, safe_add(E1, A2));
			h3 = safe_add(h4, safe_add(A1, B2));
			h4 = safe_add(h0, safe_add(B1, C2));
			h0 = T;
		}
		return [h0, h1, h2, h3, h4];
	}

	function rmd160_f(j, x, y, z) {
		return (0 <= j && j <= 15) ? (x ^ y ^ z) :
			(16 <= j && j <= 31) ? (x & y) | (~x & z) :
			(32 <= j && j <= 47) ? (x | ~y) ^ z :
			(48 <= j && j <= 63) ? (x & z) | (y & ~z) :
			(64 <= j && j <= 79) ? x ^ (y | ~z) :
			"rmd160_f: j out of range";
	}
	function rmd160_K1(j) {
		return (0 <= j && j <= 15) ? 0x00000000 :
			(16 <= j && j <= 31) ? 0x5a827999 :
			(32 <= j && j <= 47) ? 0x6ed9eba1 :
			(48 <= j && j <= 63) ? 0x8f1bbcdc :
			(64 <= j && j <= 79) ? 0xa953fd4e :
			"rmd160_K1: j out of range";
	}
	function rmd160_K2(j) {
		return (0 <= j && j <= 15) ? 0x50a28be6 :
			(16 <= j && j <= 31) ? 0x5c4dd124 :
			(32 <= j && j <= 47) ? 0x6d703ef3 :
			(48 <= j && j <= 63) ? 0x7a6d76e9 :
			(64 <= j && j <= 79) ? 0x00000000 :
			"rmd160_K2: j out of range";
	}
	var rmd160_r1 = [
		0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15,
		7, 4, 13, 1, 10, 6, 15, 3, 12, 0, 9, 5, 2, 14, 11, 8,
		3, 10, 14, 4, 9, 15, 8, 1, 2, 7, 0, 6, 13, 11, 5, 12,
		1, 9, 11, 10, 0, 8, 12, 4, 13, 3, 7, 15, 14, 5, 6, 2,
		4, 0, 5, 9, 7, 12, 2, 10, 14, 1, 3, 8, 11, 6, 15, 13
	];
	var rmd160_r2 = [
		5, 14, 7, 0, 9, 2, 11, 4, 13, 6, 15, 8, 1, 10, 3, 12,
		6, 11, 3, 7, 0, 13, 5, 10, 14, 15, 8, 12, 4, 9, 1, 2,
		15, 5, 1, 3, 7, 14, 6, 9, 11, 8, 12, 2, 10, 0, 4, 13,
		8, 6, 4, 1, 3, 11, 15, 0, 5, 12, 2, 13, 9, 7, 10, 14,
		12, 15, 10, 4, 1, 5, 8, 7, 6, 2, 13, 14, 0, 3, 9, 11
	];
	var rmd160_s1 = [
		11, 14, 15, 12, 5, 8, 7, 9, 11, 13, 14, 15, 6, 7, 9, 8,
		7, 6, 8, 13, 11, 9, 7, 15, 7, 12, 15, 9, 11, 7, 13, 12,
		11, 13, 6, 7, 14, 9, 13, 15, 14, 8, 13, 6, 5, 12, 7, 5,
		11, 12, 14, 15, 14, 15, 9, 8, 9, 14, 5, 6, 8, 6, 5, 12,
		9, 15, 5, 11, 6, 8, 13, 12, 5, 12, 13, 14, 11, 8, 5, 6
	];
	var rmd160_s2 = [
		8, 9, 9, 11, 13, 15, 15, 5, 7, 7, 8, 11, 14, 14, 12, 6,
		9, 13, 15, 7, 12, 8, 9, 11, 7, 7, 12, 7, 6, 15, 13, 11,
		9, 7, 15, 11, 8, 6, 6, 14, 12, 13, 5, 14, 13, 13, 7, 5,
		15, 5, 8, 11, 14, 14, 6, 14, 6, 9, 12, 9, 12, 5, 15, 8,
		8, 5, 12, 9, 12, 5, 14, 6, 8, 13, 6, 5, 15, 13, 11, 11
	];

	/*
	* Add integers, wrapping at 2^32. This uses 16-bit operations internally
	* to work around bugs in some JS interpreters.
	*/
	function safe_add(x, y) {
		var lsw = (x & 0xFFFF) + (y & 0xFFFF);
		var msw = (x >> 16) + (y >> 16) + (lsw >> 16);
		return (msw << 16) | (lsw & 0xFFFF);
	}

	/*
	* Bitwise rotate a 32-bit number to the left.
	*/
	function bit_rol(num, cnt) {
		return (num << cnt) | (num >>> (32 - cnt));
	}
})();
	</script>
	<script type="text/javascript">
/*!
* Random number generator with ArcFour PRNG
* 
* NOTE: For best results, put code like
* <body onclick='SecureRandom.seedTime();' onkeypress='SecureRandom.seedTime();'>
* in your main HTML document.
* 
* Copyright Tom Wu, bitaddress.org  BSD License.
* http://www-cs-students.stanford.edu/~tjw/jsbn/LICENSE
*/
(function () {

	// Constructor function of Global SecureRandom object
	var sr = window.SecureRandom = function () { };

	// Properties
	sr.state;
	sr.pool;
	sr.pptr;
	sr.poolCopyOnInit;

	// Pool size must be a multiple of 4 and greater than 32.
	// An array of bytes the size of the pool will be passed to init()
	sr.poolSize = 256;

	// --- object methods ---

	// public method
	// ba: byte array
	sr.prototype.nextBytes = function (ba) {
		var i;
		if (window.crypto && window.crypto.getRandomValues && window.Uint8Array) {
			try {
				var rvBytes = new Uint8Array(ba.length);
				window.crypto.getRandomValues(rvBytes);
				for (i = 0; i < ba.length; ++i)
					ba[i] = sr.getByte() ^ rvBytes[i];
				return;
			} catch (e) {
				alert(e);
			}
		}
		for (i = 0; i < ba.length; ++i) ba[i] = sr.getByte();
	};


	// --- static methods ---

	// Mix in the current time (w/milliseconds) into the pool
	// NOTE: this method should be called from body click/keypress event handlers to increase entropy
	sr.seedTime = function () {
		sr.seedInt(new Date().getTime());
	}

	sr.getByte = function () {
		if (sr.state == null) {
			sr.seedTime();
			sr.state = sr.ArcFour(); // Plug in your RNG constructor here
			sr.state.init(sr.pool);
			sr.poolCopyOnInit = [];
			for (sr.pptr = 0; sr.pptr < sr.pool.length; ++sr.pptr)
				sr.poolCopyOnInit[sr.pptr] = sr.pool[sr.pptr];
			sr.pptr = 0;
		}
		// TODO: allow reseeding after first request
		return sr.state.next();
	}

	// Mix in a 32-bit integer into the pool
	sr.seedInt = function (x) {
		sr.seedInt8(x);
		sr.seedInt8((x >> 8));
		sr.seedInt8((x >> 16));
		sr.seedInt8((x >> 24));
	}

	// Mix in a 16-bit integer into the pool
	sr.seedInt16 = function (x) {
		sr.seedInt8(x);
		sr.seedInt8((x >> 8));
	}

	// Mix in a 8-bit integer into the pool
	sr.seedInt8 = function (x) {
		sr.pool[sr.pptr++] ^= x & 255;
		if (sr.pptr >= sr.poolSize) sr.pptr -= sr.poolSize;
	}

	// Arcfour is a PRNG
	sr.ArcFour = function () {
		function Arcfour() {
			this.i = 0;
			this.j = 0;
			this.S = new Array();
		}

		// Initialize arcfour context from key, an array of ints, each from [0..255]
		function ARC4init(key) {
			var i, j, t;
			for (i = 0; i < 256; ++i)
				this.S[i] = i;
			j = 0;
			for (i = 0; i < 256; ++i) {
				j = (j + this.S[i] + key[i % key.length]) & 255;
				t = this.S[i];
				this.S[i] = this.S[j];
				this.S[j] = t;
			}
			this.i = 0;
			this.j = 0;
		}

		function ARC4next() {
			var t;
			this.i = (this.i + 1) & 255;
			this.j = (this.j + this.S[this.i]) & 255;
			t = this.S[this.i];
			this.S[this.i] = this.S[this.j];
			this.S[this.j] = t;
			return this.S[(t + this.S[this.i]) & 255];
		}

		Arcfour.prototype.init = ARC4init;
		Arcfour.prototype.next = ARC4next;

		return new Arcfour();
	};


	// Initialize the pool with junk if needed.
	if (sr.pool == null) {
		sr.pool = new Array();
		sr.pptr = 0;
		var t;
		if (window.crypto && window.crypto.getRandomValues && window.Uint8Array) {
			try {
				// Use webcrypto if available
				var ua = new Uint8Array(sr.poolSize);
				window.crypto.getRandomValues(ua);
				for (t = 0; t < sr.poolSize; ++t)
					sr.pool[sr.pptr++] = ua[t];
			} catch (e) { alert(e); }
		}
		while (sr.pptr < sr.poolSize) {  // extract some randomness from Math.random()
			t = Math.floor(65536 * Math.random());
			sr.pool[sr.pptr++] = t >>> 8;
			sr.pool[sr.pptr++] = t & 255;
		}
		sr.pptr = Math.floor(sr.poolSize * Math.random());
		sr.seedTime();
		// entropy
		var entropyStr = "";
		// screen size and color depth: ~4.8 to ~5.4 bits
		entropyStr += (window.screen.height * window.screen.width * window.screen.colorDepth);
		entropyStr += (window.screen.availHeight * window.screen.availWidth * window.screen.pixelDepth);
		// time zone offset: ~4 bits
		var dateObj = new Date();
		var timeZoneOffset = dateObj.getTimezoneOffset();
		entropyStr += timeZoneOffset;
		// user agent: ~8.3 to ~11.6 bits
		entropyStr += navigator.userAgent;
		// browser plugin details: ~16.2 to ~21.8 bits
		var pluginsStr = "";
		for (var i = 0; i < navigator.plugins.length; i++) {
			pluginsStr += navigator.plugins[i].name + " " + navigator.plugins[i].filename + " " + navigator.plugins[i].description + " " + navigator.plugins[i].version + ", ";
		}
		var mimeTypesStr = "";
		for (var i = 0; i < navigator.mimeTypes.length; i++) {
			mimeTypesStr += navigator.mimeTypes[i].description + " " + navigator.mimeTypes[i].type + " " + navigator.mimeTypes[i].suffixes + ", ";
		}
		entropyStr += pluginsStr + mimeTypesStr;
		// cookies and storage: 1 bit
		entropyStr += navigator.cookieEnabled + typeof (sessionStorage) + typeof (localStorage);
		// language: ~7 bit
		entropyStr += navigator.language;
		// history: ~2 bit
		entropyStr += window.history.length;
		// location
		entropyStr += window.location;

		var entropyBytes = Crypto.SHA256(entropyStr, { asBytes: true });
		for (var i = 0 ; i < entropyBytes.length ; i++) {
			sr.seedInt8(entropyBytes[i]);
		}
	}
})();
	</script>
	<script type="text/javascript">
//https://raw.github.com/bitcoinjs/bitcoinjs-lib/faa10f0f6a1fff0b9a99fffb9bc30cee33b17212/src/ecdsa.js
/*!
* Basic Javascript Elliptic Curve implementation
* Ported loosely from BouncyCastle's Java EC code
* Only Fp curves implemented for now
* 
* Copyright Tom Wu, bitaddress.org  BSD License.
* http://www-cs-students.stanford.edu/~tjw/jsbn/LICENSE
*/
(function () {

	// Constructor function of Global EllipticCurve object
	var ec = window.EllipticCurve = function () { };


	// ----------------
	// ECFieldElementFp constructor
	// q instanceof BigInteger
	// x instanceof BigInteger
	ec.FieldElementFp = function (q, x) {
		this.x = x;
		// TODO if(x.compareTo(q) >= 0) error
		this.q = q;
	};

	ec.FieldElementFp.prototype.equals = function (other) {
		if (other == this) return true;
		return (this.q.equals(other.q) && this.x.equals(other.x));
	};

	ec.FieldElementFp.prototype.toBigInteger = function () {
		return this.x;
	};

	ec.FieldElementFp.prototype.negate = function () {
		return new ec.FieldElementFp(this.q, this.x.negate().mod(this.q));
	};

	ec.FieldElementFp.prototype.add = function (b) {
		return new ec.FieldElementFp(this.q, this.x.add(b.toBigInteger()).mod(this.q));
	};

	ec.FieldElementFp.prototype.subtract = function (b) {
		return new ec.FieldElementFp(this.q, this.x.subtract(b.toBigInteger()).mod(this.q));
	};

	ec.FieldElementFp.prototype.multiply = function (b) {
		return new ec.FieldElementFp(this.q, this.x.multiply(b.toBigInteger()).mod(this.q));
	};

	ec.FieldElementFp.prototype.square = function () {
		return new ec.FieldElementFp(this.q, this.x.square().mod(this.q));
	};

	ec.FieldElementFp.prototype.divide = function (b) {
		return new ec.FieldElementFp(this.q, this.x.multiply(b.toBigInteger().modInverse(this.q)).mod(this.q));
	};

	ec.FieldElementFp.prototype.getByteLength = function () {
		return Math.floor((this.toBigInteger().bitLength() + 7) / 8);
	};

	// D.1.4 91
	/**
	* return a sqrt root - the routine verifies that the calculation
	* returns the right value - if none exists it returns null.
	* 
	* Copyright (c) 2000 - 2011 The Legion Of The Bouncy Castle (http://www.bouncycastle.org)
	* Ported to JavaScript by bitaddress.org
	*/
	ec.FieldElementFp.prototype.sqrt = function () {
		if (!this.q.testBit(0)) throw new Error("even value of q");

		// p mod 4 == 3
		if (this.q.testBit(1)) {
			// z = g^(u+1) + p, p = 4u + 3
			var z = new ec.FieldElementFp(this.q, this.x.modPow(this.q.shiftRight(2).add(BigInteger.ONE), this.q));
			return z.square().equals(this) ? z : null;
		}

		// p mod 4 == 1
		var qMinusOne = this.q.subtract(BigInteger.ONE);
		var legendreExponent = qMinusOne.shiftRight(1);
		if (!(this.x.modPow(legendreExponent, this.q).equals(BigInteger.ONE))) return null;
		var u = qMinusOne.shiftRight(2);
		var k = u.shiftLeft(1).add(BigInteger.ONE);
		var Q = this.x;
		var fourQ = Q.shiftLeft(2).mod(this.q);
		var U, V;

		do {
			var rand = new SecureRandom();
			var P;
			do {
				P = new BigInteger(this.q.bitLength(), rand);
			}
			while (P.compareTo(this.q) >= 0 || !(P.multiply(P).subtract(fourQ).modPow(legendreExponent, this.q).equals(qMinusOne)));

			var result = ec.FieldElementFp.fastLucasSequence(this.q, P, Q, k);

			U = result[0];
			V = result[1];
			if (V.multiply(V).mod(this.q).equals(fourQ)) {
				// Integer division by 2, mod q
				if (V.testBit(0)) {
					V = V.add(this.q);
				}
				V = V.shiftRight(1);
				return new ec.FieldElementFp(this.q, V);
			}
		}
		while (U.equals(BigInteger.ONE) || U.equals(qMinusOne));

		return null;
	};

	/*
	* Copyright (c) 2000 - 2011 The Legion Of The Bouncy Castle (http://www.bouncycastle.org)
	* Ported to JavaScript by bitaddress.org
	*/
	ec.FieldElementFp.fastLucasSequence = function (p, P, Q, k) {
		// TODO Research and apply "common-multiplicand multiplication here"

		var n = k.bitLength();
		var s = k.getLowestSetBit();
		var Uh = BigInteger.ONE;
		var Vl = BigInteger.TWO;
		var Vh = P;
		var Ql = BigInteger.ONE;
		var Qh = BigInteger.ONE;

		for (var j = n - 1; j >= s + 1; --j) {
			Ql = Ql.multiply(Qh).mod(p);
			if (k.testBit(j)) {
				Qh = Ql.multiply(Q).mod(p);
				Uh = Uh.multiply(Vh).mod(p);
				Vl = Vh.multiply(Vl).subtract(P.multiply(Ql)).mod(p);
				Vh = Vh.multiply(Vh).subtract(Qh.shiftLeft(1)).mod(p);
			}
			else {
				Qh = Ql;
				Uh = Uh.multiply(Vl).subtract(Ql).mod(p);
				Vh = Vh.multiply(Vl).subtract(P.multiply(Ql)).mod(p);
				Vl = Vl.multiply(Vl).subtract(Ql.shiftLeft(1)).mod(p);
			}
		}

		Ql = Ql.multiply(Qh).mod(p);
		Qh = Ql.multiply(Q).mod(p);
		Uh = Uh.multiply(Vl).subtract(Ql).mod(p);
		Vl = Vh.multiply(Vl).subtract(P.multiply(Ql)).mod(p);
		Ql = Ql.multiply(Qh).mod(p);

		for (var j = 1; j <= s; ++j) {
			Uh = Uh.multiply(Vl).mod(p);
			Vl = Vl.multiply(Vl).subtract(Ql.shiftLeft(1)).mod(p);
			Ql = Ql.multiply(Ql).mod(p);
		}

		return [Uh, Vl];
	};

	// ----------------
	// ECPointFp constructor
	ec.PointFp = function (curve, x, y, z, compressed) {
		this.curve = curve;
		this.x = x;
		this.y = y;
		// Projective coordinates: either zinv == null or z * zinv == 1
		// z and zinv are just BigIntegers, not fieldElements
		if (z == null) {
			this.z = BigInteger.ONE;
		}
		else {
			this.z = z;
		}
		this.zinv = null;
		// compression flag
		this.compressed = !!compressed;
	};

	ec.PointFp.prototype.getX = function () {
		if (this.zinv == null) {
			this.zinv = this.z.modInverse(this.curve.q);
		}
		var r = this.x.toBigInteger().multiply(this.zinv);
		this.curve.reduce(r);
		return this.curve.fromBigInteger(r);
	};

	ec.PointFp.prototype.getY = function () {
		if (this.zinv == null) {
			this.zinv = this.z.modInverse(this.curve.q);
		}
		var r = this.y.toBigInteger().multiply(this.zinv);
		this.curve.reduce(r);
		return this.curve.fromBigInteger(r);
	};

	ec.PointFp.prototype.equals = function (other) {
		if (other == this) return true;
		if (this.isInfinity()) return other.isInfinity();
		if (other.isInfinity()) return this.isInfinity();
		var u, v;
		// u = Y2 * Z1 - Y1 * Z2
		u = other.y.toBigInteger().multiply(this.z).subtract(this.y.toBigInteger().multiply(other.z)).mod(this.curve.q);
		if (!u.equals(BigInteger.ZERO)) return false;
		// v = X2 * Z1 - X1 * Z2
		v = other.x.toBigInteger().multiply(this.z).subtract(this.x.toBigInteger().multiply(other.z)).mod(this.curve.q);
		return v.equals(BigInteger.ZERO);
	};

	ec.PointFp.prototype.isInfinity = function () {
		if ((this.x == null) && (this.y == null)) return true;
		return this.z.equals(BigInteger.ZERO) && !this.y.toBigInteger().equals(BigInteger.ZERO);
	};

	ec.PointFp.prototype.negate = function () {
		return new ec.PointFp(this.curve, this.x, this.y.negate(), this.z);
	};

	ec.PointFp.prototype.add = function (b) {
		if (this.isInfinity()) return b;
		if (b.isInfinity()) return this;

		// u = Y2 * Z1 - Y1 * Z2
		var u = b.y.toBigInteger().multiply(this.z).subtract(this.y.toBigInteger().multiply(b.z)).mod(this.curve.q);
		// v = X2 * Z1 - X1 * Z2
		var v = b.x.toBigInteger().multiply(this.z).subtract(this.x.toBigInteger().multiply(b.z)).mod(this.curve.q);


		if (BigInteger.ZERO.equals(v)) {
			if (BigInteger.ZERO.equals(u)) {
				return this.twice(); // this == b, so double
			}
			return this.curve.getInfinity(); // this = -b, so infinity
		}

		var THREE = new BigInteger("3");
		var x1 = this.x.toBigInteger();
		var y1 = this.y.toBigInteger();
		var x2 = b.x.toBigInteger();
		var y2 = b.y.toBigInteger();

		var v2 = v.square();
		var v3 = v2.multiply(v);
		var x1v2 = x1.multiply(v2);
		var zu2 = u.square().multiply(this.z);

		// x3 = v * (z2 * (z1 * u^2 - 2 * x1 * v^2) - v^3)
		var x3 = zu2.subtract(x1v2.shiftLeft(1)).multiply(b.z).subtract(v3).multiply(v).mod(this.curve.q);
		// y3 = z2 * (3 * x1 * u * v^2 - y1 * v^3 - z1 * u^3) + u * v^3
		var y3 = x1v2.multiply(THREE).multiply(u).subtract(y1.multiply(v3)).subtract(zu2.multiply(u)).multiply(b.z).add(u.multiply(v3)).mod(this.curve.q);
		// z3 = v^3 * z1 * z2
		var z3 = v3.multiply(this.z).multiply(b.z).mod(this.curve.q);

		return new ec.PointFp(this.curve, this.curve.fromBigInteger(x3), this.curve.fromBigInteger(y3), z3);
	};

	ec.PointFp.prototype.twice = function () {
		if (this.isInfinity()) return this;
		if (this.y.toBigInteger().signum() == 0) return this.curve.getInfinity();

		// TODO: optimized handling of constants
		var THREE = new BigInteger("3");
		var x1 = this.x.toBigInteger();
		var y1 = this.y.toBigInteger();

		var y1z1 = y1.multiply(this.z);
		var y1sqz1 = y1z1.multiply(y1).mod(this.curve.q);
		var a = this.curve.a.toBigInteger();

		// w = 3 * x1^2 + a * z1^2
		var w = x1.square().multiply(THREE);
		if (!BigInteger.ZERO.equals(a)) {
			w = w.add(this.z.square().multiply(a));
		}
		w = w.mod(this.curve.q);
		//this.curve.reduce(w);
		// x3 = 2 * y1 * z1 * (w^2 - 8 * x1 * y1^2 * z1)
		var x3 = w.square().subtract(x1.shiftLeft(3).multiply(y1sqz1)).shiftLeft(1).multiply(y1z1).mod(this.curve.q);
		// y3 = 4 * y1^2 * z1 * (3 * w * x1 - 2 * y1^2 * z1) - w^3
		var y3 = w.multiply(THREE).multiply(x1).subtract(y1sqz1.shiftLeft(1)).shiftLeft(2).multiply(y1sqz1).subtract(w.square().multiply(w)).mod(this.curve.q);
		// z3 = 8 * (y1 * z1)^3
		var z3 = y1z1.square().multiply(y1z1).shiftLeft(3).mod(this.curve.q);

		return new ec.PointFp(this.curve, this.curve.fromBigInteger(x3), this.curve.fromBigInteger(y3), z3);
	};

	// Simple NAF (Non-Adjacent Form) multiplication algorithm
	// TODO: modularize the multiplication algorithm
	ec.PointFp.prototype.multiply = function (k) {
		if (this.isInfinity()) return this;
		if (k.signum() == 0) return this.curve.getInfinity();

		var e = k;
		var h = e.multiply(new BigInteger("3"));

		var neg = this.negate();
		var R = this;

		var i;
		for (i = h.bitLength() - 2; i > 0; --i) {
			R = R.twice();

			var hBit = h.testBit(i);
			var eBit = e.testBit(i);

			if (hBit != eBit) {
				R = R.add(hBit ? this : neg);
			}
		}

		return R;
	};

	// Compute this*j + x*k (simultaneous multiplication)
	ec.PointFp.prototype.multiplyTwo = function (j, x, k) {
		var i;
		if (j.bitLength() > k.bitLength())
			i = j.bitLength() - 1;
		else
			i = k.bitLength() - 1;

		var R = this.curve.getInfinity();
		var both = this.add(x);
		while (i >= 0) {
			R = R.twice();
			if (j.testBit(i)) {
				if (k.testBit(i)) {
					R = R.add(both);
				}
				else {
					R = R.add(this);
				}
			}
			else {
				if (k.testBit(i)) {
					R = R.add(x);
				}
			}
			--i;
		}

		return R;
	};

	// patched by bitaddress.org and Casascius for use with Bitcoin.ECKey
	// patched by coretechs to support compressed public keys
	ec.PointFp.prototype.getEncoded = function (compressed) {
		var x = this.getX().toBigInteger();
		var y = this.getY().toBigInteger();
		var len = 32; // integerToBytes will zero pad if integer is less than 32 bytes. 32 bytes length is required by the Bitcoin protocol.
		var enc = ec.integerToBytes(x, len);

		// when compressed prepend byte depending if y point is even or odd 
		if (compressed) {
			if (y.isEven()) {
				enc.unshift(0x02);
			}
			else {
				enc.unshift(0x03);
			}
		}
		else {
			enc.unshift(0x04);
			enc = enc.concat(ec.integerToBytes(y, len)); // uncompressed public key appends the bytes of the y point
		}
		return enc;
	};

	ec.PointFp.decodeFrom = function (curve, enc) {
		var type = enc[0];
		var dataLen = enc.length - 1;

		// Extract x and y as byte arrays
		var xBa = enc.slice(1, 1 + dataLen / 2);
		var yBa = enc.slice(1 + dataLen / 2, 1 + dataLen);

		// Prepend zero byte to prevent interpretation as negative integer
		xBa.unshift(0);
		yBa.unshift(0);

		// Convert to BigIntegers
		var x = new BigInteger(xBa);
		var y = new BigInteger(yBa);

		// Return point
		return new ec.PointFp(curve, curve.fromBigInteger(x), curve.fromBigInteger(y));
	};

	ec.PointFp.prototype.add2D = function (b) {
		if (this.isInfinity()) return b;
		if (b.isInfinity()) return this;

		if (this.x.equals(b.x)) {
			if (this.y.equals(b.y)) {
				// this = b, i.e. this must be doubled
				return this.twice();
			}
			// this = -b, i.e. the result is the point at infinity
			return this.curve.getInfinity();
		}

		var x_x = b.x.subtract(this.x);
		var y_y = b.y.subtract(this.y);
		var gamma = y_y.divide(x_x);

		var x3 = gamma.square().subtract(this.x).subtract(b.x);
		var y3 = gamma.multiply(this.x.subtract(x3)).subtract(this.y);

		return new ec.PointFp(this.curve, x3, y3);
	};

	ec.PointFp.prototype.twice2D = function () {
		if (this.isInfinity()) return this;
		if (this.y.toBigInteger().signum() == 0) {
			// if y1 == 0, then (x1, y1) == (x1, -y1)
			// and hence this = -this and thus 2(x1, y1) == infinity
			return this.curve.getInfinity();
		}

		var TWO = this.curve.fromBigInteger(BigInteger.valueOf(2));
		var THREE = this.curve.fromBigInteger(BigInteger.valueOf(3));
		var gamma = this.x.square().multiply(THREE).add(this.curve.a).divide(this.y.multiply(TWO));

		var x3 = gamma.square().subtract(this.x.multiply(TWO));
		var y3 = gamma.multiply(this.x.subtract(x3)).subtract(this.y);

		return new ec.PointFp(this.curve, x3, y3);
	};

	ec.PointFp.prototype.multiply2D = function (k) {
		if (this.isInfinity()) return this;
		if (k.signum() == 0) return this.curve.getInfinity();

		var e = k;
		var h = e.multiply(new BigInteger("3"));

		var neg = this.negate();
		var R = this;

		var i;
		for (i = h.bitLength() - 2; i > 0; --i) {
			R = R.twice();

			var hBit = h.testBit(i);
			var eBit = e.testBit(i);

			if (hBit != eBit) {
				R = R.add2D(hBit ? this : neg);
			}
		}

		return R;
	};

	ec.PointFp.prototype.isOnCurve = function () {
		var x = this.getX().toBigInteger();
		var y = this.getY().toBigInteger();
		var a = this.curve.getA().toBigInteger();
		var b = this.curve.getB().toBigInteger();
		var n = this.curve.getQ();
		var lhs = y.multiply(y).mod(n);
		var rhs = x.multiply(x).multiply(x).add(a.multiply(x)).add(b).mod(n);
		return lhs.equals(rhs);
	};

	ec.PointFp.prototype.toString = function () {
		return '(' + this.getX().toBigInteger().toString() + ',' + this.getY().toBigInteger().toString() + ')';
	};

	/**
	* Validate an elliptic curve point.
	*
	* See SEC 1, section 3.2.2.1: Elliptic Curve Public Key Validation Primitive
	*/
	ec.PointFp.prototype.validate = function () {
		var n = this.curve.getQ();

		// Check Q != O
		if (this.isInfinity()) {
			throw new Error("Point is at infinity.");
		}

		// Check coordinate bounds
		var x = this.getX().toBigInteger();
		var y = this.getY().toBigInteger();
		if (x.compareTo(BigInteger.ONE) < 0 || x.compareTo(n.subtract(BigInteger.ONE)) > 0) {
			throw new Error('x coordinate out of bounds');
		}
		if (y.compareTo(BigInteger.ONE) < 0 || y.compareTo(n.subtract(BigInteger.ONE)) > 0) {
			throw new Error('y coordinate out of bounds');
		}

		// Check y^2 = x^3 + ax + b (mod n)
		if (!this.isOnCurve()) {
			throw new Error("Point is not on the curve.");
		}

		// Check nQ = 0 (Q is a scalar multiple of G)
		if (this.multiply(n).isInfinity()) {
			// TODO: This check doesn't work - fix.
			throw new Error("Point is not a scalar multiple of G.");
		}

		return true;
	};




	// ----------------
	// ECCurveFp constructor
	ec.CurveFp = function (q, a, b) {
		this.q = q;
		this.a = this.fromBigInteger(a);
		this.b = this.fromBigInteger(b);
		this.infinity = new ec.PointFp(this, null, null);
		this.reducer = new Barrett(this.q);
	}

	ec.CurveFp.prototype.getQ = function () {
		return this.q;
	};

	ec.CurveFp.prototype.getA = function () {
		return this.a;
	};

	ec.CurveFp.prototype.getB = function () {
		return this.b;
	};

	ec.CurveFp.prototype.equals = function (other) {
		if (other == this) return true;
		return (this.q.equals(other.q) && this.a.equals(other.a) && this.b.equals(other.b));
	};

	ec.CurveFp.prototype.getInfinity = function () {
		return this.infinity;
	};

	ec.CurveFp.prototype.fromBigInteger = function (x) {
		return new ec.FieldElementFp(this.q, x);
	};

	ec.CurveFp.prototype.reduce = function (x) {
		this.reducer.reduce(x);
	};

	// for now, work with hex strings because they're easier in JS
	// compressed support added by bitaddress.org
	ec.CurveFp.prototype.decodePointHex = function (s) {
		var firstByte = parseInt(s.substr(0, 2), 16);
		switch (firstByte) { // first byte
			case 0:
				return this.infinity;
			case 2: // compressed
			case 3: // compressed
				var yTilde = firstByte & 1;
				var xHex = s.substr(2, s.length - 2);
				var X1 = new BigInteger(xHex, 16);
				return this.decompressPoint(yTilde, X1);
			case 4: // uncompressed
			case 6: // hybrid
			case 7: // hybrid
				var len = (s.length - 2) / 2;
				var xHex = s.substr(2, len);
				var yHex = s.substr(len + 2, len);

				return new ec.PointFp(this,
					this.fromBigInteger(new BigInteger(xHex, 16)),
					this.fromBigInteger(new BigInteger(yHex, 16)));

			default: // unsupported
				return null;
		}
	};

	ec.CurveFp.prototype.encodePointHex = function (p) {
		if (p.isInfinity()) return "00";
		var xHex = p.getX().toBigInteger().toString(16);
		var yHex = p.getY().toBigInteger().toString(16);
		var oLen = this.getQ().toString(16).length;
		if ((oLen % 2) != 0) oLen++;
		while (xHex.length < oLen) {
			xHex = "0" + xHex;
		}
		while (yHex.length < oLen) {
			yHex = "0" + yHex;
		}
		return "04" + xHex + yHex;
	};

	/*
	* Copyright (c) 2000 - 2011 The Legion Of The Bouncy Castle (http://www.bouncycastle.org)
	* Ported to JavaScript by bitaddress.org
	*
	* Number yTilde
	* BigInteger X1
	*/
	ec.CurveFp.prototype.decompressPoint = function (yTilde, X1) {
		var x = this.fromBigInteger(X1);
		var alpha = x.multiply(x.square().add(this.getA())).add(this.getB());
		var beta = alpha.sqrt();
		// if we can't find a sqrt we haven't got a point on the curve - run!
		if (beta == null) throw new Error("Invalid point compression");
		var betaValue = beta.toBigInteger();
		var bit0 = betaValue.testBit(0) ? 1 : 0;
		if (bit0 != yTilde) {
			// Use the other root
			beta = this.fromBigInteger(this.getQ().subtract(betaValue));
		}
		return new ec.PointFp(this, x, beta, null, true);
	};


	ec.fromHex = function (s) { return new BigInteger(s, 16); };

	ec.integerToBytes = function (i, len) {
		var bytes = i.toByteArrayUnsigned();
		if (len < bytes.length) {
			bytes = bytes.slice(bytes.length - len);
		} else while (len > bytes.length) {
			bytes.unshift(0);
		}
		return bytes;
	};


	// Named EC curves
	// ----------------
	// X9ECParameters constructor
	ec.X9Parameters = function (curve, g, n, h) {
		this.curve = curve;
		this.g = g;
		this.n = n;
		this.h = h;
	}
	ec.X9Parameters.prototype.getCurve = function () { return this.curve; };
	ec.X9Parameters.prototype.getG = function () { return this.g; };
	ec.X9Parameters.prototype.getN = function () { return this.n; };
	ec.X9Parameters.prototype.getH = function () { return this.h; };

	// secp256k1 is the Curve used by Bitcoin
	ec.secNamedCurves = {
		// used by Bitcoin
		"secp256k1": function () {
			// p = 2^256 - 2^32 - 2^9 - 2^8 - 2^7 - 2^6 - 2^4 - 1
			var p = ec.fromHex("FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFEFFFFFC2F");
			var a = BigInteger.ZERO;
			var b = ec.fromHex("7");
			var n = ec.fromHex("FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFEBAAEDCE6AF48A03BBFD25E8CD0364141");
			var h = BigInteger.ONE;
			var curve = new ec.CurveFp(p, a, b);
			var G = curve.decodePointHex("04"
					+ "79BE667EF9DCBBAC55A06295CE870B07029BFCDB2DCE28D959F2815B16F81798"
					+ "483ADA7726A3C4655DA4FBFC0E1108A8FD17B448A68554199C47D08FFB10D4B8");
			return new ec.X9Parameters(curve, G, n, h);
		}
	};

	// secp256k1 called by Bitcoin's ECKEY
	ec.getSECCurveByName = function (name) {
		if (ec.secNamedCurves[name] == undefined) return null;
		return ec.secNamedCurves[name]();
	}
})();
	</script>
	<script type="text/javascript">
/*!
* Basic JavaScript BN library - subset useful for RSA encryption. v1.3
* 
* Copyright (c) 2005  Tom Wu
* All Rights Reserved.
* BSD License
* http://www-cs-students.stanford.edu/~tjw/jsbn/LICENSE
*
* Copyright Stephan Thomas
* Copyright bitaddress.org
*/

(function () {

	// (public) Constructor function of Global BigInteger object
	var BigInteger = window.BigInteger = function BigInteger(a, b, c) {
		if (a != null)
			if ("number" == typeof a) this.fromNumber(a, b, c);
			else if (b == null && "string" != typeof a) this.fromString(a, 256);
			else this.fromString(a, b);
	};

	// Bits per digit
	var dbits;

	// JavaScript engine analysis
	var canary = 0xdeadbeefcafe;
	var j_lm = ((canary & 0xffffff) == 0xefcafe);

	// return new, unset BigInteger
	function nbi() { return new BigInteger(null); }

	// am: Compute w_j += (x*this_i), propagate carries,
	// c is initial carry, returns final carry.
	// c < 3*dvalue, x < 2*dvalue, this_i < dvalue
	// We need to select the fastest one that works in this environment.

	// am1: use a single mult and divide to get the high bits,
	// max digit bits should be 26 because
	// max internal value = 2*dvalue^2-2*dvalue (< 2^53)
	function am1(i, x, w, j, c, n) {
		while (--n >= 0) {
			var v = x * this[i++] + w[j] + c;
			c = Math.floor(v / 0x4000000);
			w[j++] = v & 0x3ffffff;
		}
		return c;
	}
	// am2 avoids a big mult-and-extract completely.
	// Max digit bits should be <= 30 because we do bitwise ops
	// on values up to 2*hdvalue^2-hdvalue-1 (< 2^31)
	function am2(i, x, w, j, c, n) {
		var xl = x & 0x7fff, xh = x >> 15;
		while (--n >= 0) {
			var l = this[i] & 0x7fff;
			var h = this[i++] >> 15;
			var m = xh * l + h * xl;
			l = xl * l + ((m & 0x7fff) << 15) + w[j] + (c & 0x3fffffff);
			c = (l >>> 30) + (m >>> 15) + xh * h + (c >>> 30);
			w[j++] = l & 0x3fffffff;
		}
		return c;
	}
	// Alternately, set max digit bits to 28 since some
	// browsers slow down when dealing with 32-bit numbers.
	function am3(i, x, w, j, c, n) {
		var xl = x & 0x3fff, xh = x >> 14;
		while (--n >= 0) {
			var l = this[i] & 0x3fff;
			var h = this[i++] >> 14;
			var m = xh * l + h * xl;
			l = xl * l + ((m & 0x3fff) << 14) + w[j] + c;
			c = (l >> 28) + (m >> 14) + xh * h;
			w[j++] = l & 0xfffffff;
		}
		return c;
	}
	if (j_lm && (navigator.appName == "Microsoft Internet Explorer")) {
		BigInteger.prototype.am = am2;
		dbits = 30;
	}
	else if (j_lm && (navigator.appName != "Netscape")) {
		BigInteger.prototype.am = am1;
		dbits = 26;
	}
	else { // Mozilla/Netscape seems to prefer am3
		BigInteger.prototype.am = am3;
		dbits = 28;
	}

	BigInteger.prototype.DB = dbits;
	BigInteger.prototype.DM = ((1 << dbits) - 1);
	BigInteger.prototype.DV = (1 << dbits);

	var BI_FP = 52;
	BigInteger.prototype.FV = Math.pow(2, BI_FP);
	BigInteger.prototype.F1 = BI_FP - dbits;
	BigInteger.prototype.F2 = 2 * dbits - BI_FP;

	// Digit conversions
	var BI_RM = "0123456789abcdefghijklmnopqrstuvwxyz";
	var BI_RC = new Array();
	var rr, vv;
	rr = "0".charCodeAt(0);
	for (vv = 0; vv <= 9; ++vv) BI_RC[rr++] = vv;
	rr = "a".charCodeAt(0);
	for (vv = 10; vv < 36; ++vv) BI_RC[rr++] = vv;
	rr = "A".charCodeAt(0);
	for (vv = 10; vv < 36; ++vv) BI_RC[rr++] = vv;

	function int2char(n) { return BI_RM.charAt(n); }
	function intAt(s, i) {
		var c = BI_RC[s.charCodeAt(i)];
		return (c == null) ? -1 : c;
	}



	// return bigint initialized to value
	function nbv(i) { var r = nbi(); r.fromInt(i); return r; }


	// returns bit length of the integer x
	function nbits(x) {
		var r = 1, t;
		if ((t = x >>> 16) != 0) { x = t; r += 16; }
		if ((t = x >> 8) != 0) { x = t; r += 8; }
		if ((t = x >> 4) != 0) { x = t; r += 4; }
		if ((t = x >> 2) != 0) { x = t; r += 2; }
		if ((t = x >> 1) != 0) { x = t; r += 1; }
		return r;
	}







	// (protected) copy this to r
	BigInteger.prototype.copyTo = function (r) {
		for (var i = this.t - 1; i >= 0; --i) r[i] = this[i];
		r.t = this.t;
		r.s = this.s;
	};


	// (protected) set from integer value x, -DV <= x < DV
	BigInteger.prototype.fromInt = function (x) {
		this.t = 1;
		this.s = (x < 0) ? -1 : 0;
		if (x > 0) this[0] = x;
		else if (x < -1) this[0] = x + this.DV;
		else this.t = 0;
	};

	// (protected) set from string and radix
	BigInteger.prototype.fromString = function (s, b) {
		var k;
		if (b == 16) k = 4;
		else if (b == 8) k = 3;
		else if (b == 256) k = 8; // byte array
		else if (b == 2) k = 1;
		else if (b == 32) k = 5;
		else if (b == 4) k = 2;
		else { this.fromRadix(s, b); return; }
		this.t = 0;
		this.s = 0;
		var i = s.length, mi = false, sh = 0;
		while (--i >= 0) {
			var x = (k == 8) ? s[i] & 0xff : intAt(s, i);
			if (x < 0) {
				if (s.charAt(i) == "-") mi = true;
				continue;
			}
			mi = false;
			if (sh == 0)
				this[this.t++] = x;
			else if (sh + k > this.DB) {
				this[this.t - 1] |= (x & ((1 << (this.DB - sh)) - 1)) << sh;
				this[this.t++] = (x >> (this.DB - sh));
			}
			else
				this[this.t - 1] |= x << sh;
			sh += k;
			if (sh >= this.DB) sh -= this.DB;
		}
		if (k == 8 && (s[0] & 0x80) != 0) {
			this.s = -1;
			if (sh > 0) this[this.t - 1] |= ((1 << (this.DB - sh)) - 1) << sh;
		}
		this.clamp();
		if (mi) BigInteger.ZERO.subTo(this, this);
	};


	// (protected) clamp off excess high words
	BigInteger.prototype.clamp = function () {
		var c = this.s & this.DM;
		while (this.t > 0 && this[this.t - 1] == c) --this.t;
	};

	// (protected) r = this << n*DB
	BigInteger.prototype.dlShiftTo = function (n, r) {
		var i;
		for (i = this.t - 1; i >= 0; --i) r[i + n] = this[i];
		for (i = n - 1; i >= 0; --i) r[i] = 0;
		r.t = this.t + n;
		r.s = this.s;
	};

	// (protected) r = this >> n*DB
	BigInteger.prototype.drShiftTo = function (n, r) {
		for (var i = n; i < this.t; ++i) r[i - n] = this[i];
		r.t = Math.max(this.t - n, 0);
		r.s = this.s;
	};


	// (protected) r = this << n
	BigInteger.prototype.lShiftTo = function (n, r) {
		var bs = n % this.DB;
		var cbs = this.DB - bs;
		var bm = (1 << cbs) - 1;
		var ds = Math.floor(n / this.DB), c = (this.s << bs) & this.DM, i;
		for (i = this.t - 1; i >= 0; --i) {
			r[i + ds + 1] = (this[i] >> cbs) | c;
			c = (this[i] & bm) << bs;
		}
		for (i = ds - 1; i >= 0; --i) r[i] = 0;
		r[ds] = c;
		r.t = this.t + ds + 1;
		r.s = this.s;
		r.clamp();
	};


	// (protected) r = this >> n
	BigInteger.prototype.rShiftTo = function (n, r) {
		r.s = this.s;
		var ds = Math.floor(n / this.DB);
		if (ds >= this.t) { r.t = 0; return; }
		var bs = n % this.DB;
		var cbs = this.DB - bs;
		var bm = (1 << bs) - 1;
		r[0] = this[ds] >> bs;
		for (var i = ds + 1; i < this.t; ++i) {
			r[i - ds - 1] |= (this[i] & bm) << cbs;
			r[i - ds] = this[i] >> bs;
		}
		if (bs > 0) r[this.t - ds - 1] |= (this.s & bm) << cbs;
		r.t = this.t - ds;
		r.clamp();
	};


	// (protected) r = this - a
	BigInteger.prototype.subTo = function (a, r) {
		var i = 0, c = 0, m = Math.min(a.t, this.t);
		while (i < m) {
			c += this[i] - a[i];
			r[i++] = c & this.DM;
			c >>= this.DB;
		}
		if (a.t < this.t) {
			c -= a.s;
			while (i < this.t) {
				c += this[i];
				r[i++] = c & this.DM;
				c >>= this.DB;
			}
			c += this.s;
		}
		else {
			c += this.s;
			while (i < a.t) {
				c -= a[i];
				r[i++] = c & this.DM;
				c >>= this.DB;
			}
			c -= a.s;
		}
		r.s = (c < 0) ? -1 : 0;
		if (c < -1) r[i++] = this.DV + c;
		else if (c > 0) r[i++] = c;
		r.t = i;
		r.clamp();
	};


	// (protected) r = this * a, r != this,a (HAC 14.12)
	// "this" should be the larger one if appropriate.
	BigInteger.prototype.multiplyTo = function (a, r) {
		var x = this.abs(), y = a.abs();
		var i = x.t;
		r.t = i + y.t;
		while (--i >= 0) r[i] = 0;
		for (i = 0; i < y.t; ++i) r[i + x.t] = x.am(0, y[i], r, i, 0, x.t);
		r.s = 0;
		r.clamp();
		if (this.s != a.s) BigInteger.ZERO.subTo(r, r);
	};


	// (protected) r = this^2, r != this (HAC 14.16)
	BigInteger.prototype.squareTo = function (r) {
		var x = this.abs();
		var i = r.t = 2 * x.t;
		while (--i >= 0) r[i] = 0;
		for (i = 0; i < x.t - 1; ++i) {
			var c = x.am(i, x[i], r, 2 * i, 0, 1);
			if ((r[i + x.t] += x.am(i + 1, 2 * x[i], r, 2 * i + 1, c, x.t - i - 1)) >= x.DV) {
				r[i + x.t] -= x.DV;
				r[i + x.t + 1] = 1;
			}
		}
		if (r.t > 0) r[r.t - 1] += x.am(i, x[i], r, 2 * i, 0, 1);
		r.s = 0;
		r.clamp();
	};



	// (protected) divide this by m, quotient and remainder to q, r (HAC 14.20)
	// r != q, this != m.  q or r may be null.
	BigInteger.prototype.divRemTo = function (m, q, r) {
		var pm = m.abs();
		if (pm.t <= 0) return;
		var pt = this.abs();
		if (pt.t < pm.t) {
			if (q != null) q.fromInt(0);
			if (r != null) this.copyTo(r);
			return;
		}
		if (r == null) r = nbi();
		var y = nbi(), ts = this.s, ms = m.s;
		var nsh = this.DB - nbits(pm[pm.t - 1]); // normalize modulus
		if (nsh > 0) { pm.lShiftTo(nsh, y); pt.lShiftTo(nsh, r); }
		else { pm.copyTo(y); pt.copyTo(r); }
		var ys = y.t;
		var y0 = y[ys - 1];
		if (y0 == 0) return;
		var yt = y0 * (1 << this.F1) + ((ys > 1) ? y[ys - 2] >> this.F2 : 0);
		var d1 = this.FV / yt, d2 = (1 << this.F1) / yt, e = 1 << this.F2;
		var i = r.t, j = i - ys, t = (q == null) ? nbi() : q;
		y.dlShiftTo(j, t);
		if (r.compareTo(t) >= 0) {
			r[r.t++] = 1;
			r.subTo(t, r);
		}
		BigInteger.ONE.dlShiftTo(ys, t);
		t.subTo(y, y); // "negative" y so we can replace sub with am later
		while (y.t < ys) y[y.t++] = 0;
		while (--j >= 0) {
			// Estimate quotient digit
			var qd = (r[--i] == y0) ? this.DM : Math.floor(r[i] * d1 + (r[i - 1] + e) * d2);
			if ((r[i] += y.am(0, qd, r, j, 0, ys)) < qd) {	// Try it out
				y.dlShiftTo(j, t);
				r.subTo(t, r);
				while (r[i] < --qd) r.subTo(t, r);
			}
		}
		if (q != null) {
			r.drShiftTo(ys, q);
			if (ts != ms) BigInteger.ZERO.subTo(q, q);
		}
		r.t = ys;
		r.clamp();
		if (nsh > 0) r.rShiftTo(nsh, r); // Denormalize remainder
		if (ts < 0) BigInteger.ZERO.subTo(r, r);
	};


	// (protected) return "-1/this % 2^DB"; useful for Mont. reduction
	// justification:
	//         xy == 1 (mod m)
	//         xy =  1+km
	//   xy(2-xy) = (1+km)(1-km)
	// x[y(2-xy)] = 1-k^2m^2
	// x[y(2-xy)] == 1 (mod m^2)
	// if y is 1/x mod m, then y(2-xy) is 1/x mod m^2
	// should reduce x and y(2-xy) by m^2 at each step to keep size bounded.
	// JS multiply "overflows" differently from C/C++, so care is needed here.
	BigInteger.prototype.invDigit = function () {
		if (this.t < 1) return 0;
		var x = this[0];
		if ((x & 1) == 0) return 0;
		var y = x & 3; 	// y == 1/x mod 2^2
		y = (y * (2 - (x & 0xf) * y)) & 0xf; // y == 1/x mod 2^4
		y = (y * (2 - (x & 0xff) * y)) & 0xff; // y == 1/x mod 2^8
		y = (y * (2 - (((x & 0xffff) * y) & 0xffff))) & 0xffff; // y == 1/x mod 2^16
		// last step - calculate inverse mod DV directly;
		// assumes 16 < DB <= 32 and assumes ability to handle 48-bit ints
		y = (y * (2 - x * y % this.DV)) % this.DV; 	// y == 1/x mod 2^dbits
		// we really want the negative inverse, and -DV < y < DV
		return (y > 0) ? this.DV - y : -y;
	};


	// (protected) true iff this is even
	BigInteger.prototype.isEven = function () { return ((this.t > 0) ? (this[0] & 1) : this.s) == 0; };


	// (protected) this^e, e < 2^32, doing sqr and mul with "r" (HAC 14.79)
	BigInteger.prototype.exp = function (e, z) {
		if (e > 0xffffffff || e < 1) return BigInteger.ONE;
		var r = nbi(), r2 = nbi(), g = z.convert(this), i = nbits(e) - 1;
		g.copyTo(r);
		while (--i >= 0) {
			z.sqrTo(r, r2);
			if ((e & (1 << i)) > 0) z.mulTo(r2, g, r);
			else { var t = r; r = r2; r2 = t; }
		}
		return z.revert(r);
	};


	// (public) return string representation in given radix
	BigInteger.prototype.toString = function (b) {
		if (this.s < 0) return "-" + this.negate().toString(b);
		var k;
		if (b == 16) k = 4;
		else if (b == 8) k = 3;
		else if (b == 2) k = 1;
		else if (b == 32) k = 5;
		else if (b == 4) k = 2;
		else return this.toRadix(b);
		var km = (1 << k) - 1, d, m = false, r = "", i = this.t;
		var p = this.DB - (i * this.DB) % k;
		if (i-- > 0) {
			if (p < this.DB && (d = this[i] >> p) > 0) { m = true; r = int2char(d); }
			while (i >= 0) {
				if (p < k) {
					d = (this[i] & ((1 << p) - 1)) << (k - p);
					d |= this[--i] >> (p += this.DB - k);
				}
				else {
					d = (this[i] >> (p -= k)) & km;
					if (p <= 0) { p += this.DB; --i; }
				}
				if (d > 0) m = true;
				if (m) r += int2char(d);
			}
		}
		return m ? r : "0";
	};


	// (public) -this
	BigInteger.prototype.negate = function () { var r = nbi(); BigInteger.ZERO.subTo(this, r); return r; };

	// (public) |this|
	BigInteger.prototype.abs = function () { return (this.s < 0) ? this.negate() : this; };

	// (public) return + if this > a, - if this < a, 0 if equal
	BigInteger.prototype.compareTo = function (a) {
		var r = this.s - a.s;
		if (r != 0) return r;
		var i = this.t;
		r = i - a.t;
		if (r != 0) return (this.s < 0) ? -r : r;
		while (--i >= 0) if ((r = this[i] - a[i]) != 0) return r;
		return 0;
	}

	// (public) return the number of bits in "this"
	BigInteger.prototype.bitLength = function () {
		if (this.t <= 0) return 0;
		return this.DB * (this.t - 1) + nbits(this[this.t - 1] ^ (this.s & this.DM));
	};

	// (public) this mod a
	BigInteger.prototype.mod = function (a) {
		var r = nbi();
		this.abs().divRemTo(a, null, r);
		if (this.s < 0 && r.compareTo(BigInteger.ZERO) > 0) a.subTo(r, r);
		return r;
	}

	// (public) this^e % m, 0 <= e < 2^32
	BigInteger.prototype.modPowInt = function (e, m) {
		var z;
		if (e < 256 || m.isEven()) z = new Classic(m); else z = new Montgomery(m);
		return this.exp(e, z);
	};

	// "constants"
	BigInteger.ZERO = nbv(0);
	BigInteger.ONE = nbv(1);







	// Copyright (c) 2005-2009  Tom Wu
	// All Rights Reserved.
	// See "LICENSE" for details.
	// Extended JavaScript BN functions, required for RSA private ops.
	// Version 1.1: new BigInteger("0", 10) returns "proper" zero
	// Version 1.2: square() API, isProbablePrime fix


	// return index of lowest 1-bit in x, x < 2^31
	function lbit(x) {
		if (x == 0) return -1;
		var r = 0;
		if ((x & 0xffff) == 0) { x >>= 16; r += 16; }
		if ((x & 0xff) == 0) { x >>= 8; r += 8; }
		if ((x & 0xf) == 0) { x >>= 4; r += 4; }
		if ((x & 3) == 0) { x >>= 2; r += 2; }
		if ((x & 1) == 0) ++r;
		return r;
	}

	// return number of 1 bits in x
	function cbit(x) {
		var r = 0;
		while (x != 0) { x &= x - 1; ++r; }
		return r;
	}

	var lowprimes = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97, 101, 103, 107, 109, 113, 127, 131, 137, 139, 149, 151, 157, 163, 167, 173, 179, 181, 191, 193, 197, 199, 211, 223, 227, 229, 233, 239, 241, 251, 257, 263, 269, 271, 277, 281, 283, 293, 307, 311, 313, 317, 331, 337, 347, 349, 353, 359, 367, 373, 379, 383, 389, 397, 401, 409, 419, 421, 431, 433, 439, 443, 449, 457, 461, 463, 467, 479, 487, 491, 499, 503, 509, 521, 523, 541, 547, 557, 563, 569, 571, 577, 587, 593, 599, 601, 607, 613, 617, 619, 631, 641, 643, 647, 653, 659, 661, 673, 677, 683, 691, 701, 709, 719, 727, 733, 739, 743, 751, 757, 761, 769, 773, 787, 797, 809, 811, 821, 823, 827, 829, 839, 853, 857, 859, 863, 877, 881, 883, 887, 907, 911, 919, 929, 937, 941, 947, 953, 967, 971, 977, 983, 991, 997];
	var lplim = (1 << 26) / lowprimes[lowprimes.length - 1];



	// (protected) return x s.t. r^x < DV
	BigInteger.prototype.chunkSize = function (r) { return Math.floor(Math.LN2 * this.DB / Math.log(r)); };

	// (protected) convert to radix string
	BigInteger.prototype.toRadix = function (b) {
		if (b == null) b = 10;
		if (this.signum() == 0 || b < 2 || b > 36) return "0";
		var cs = this.chunkSize(b);
		var a = Math.pow(b, cs);
		var d = nbv(a), y = nbi(), z = nbi(), r = "";
		this.divRemTo(d, y, z);
		while (y.signum() > 0) {
			r = (a + z.intValue()).toString(b).substr(1) + r;
			y.divRemTo(d, y, z);
		}
		return z.intValue().toString(b) + r;
	};

	// (protected) convert from radix string
	BigInteger.prototype.fromRadix = function (s, b) {
		this.fromInt(0);
		if (b == null) b = 10;
		var cs = this.chunkSize(b);
		var d = Math.pow(b, cs), mi = false, j = 0, w = 0;
		for (var i = 0; i < s.length; ++i) {
			var x = intAt(s, i);
			if (x < 0) {
				if (s.charAt(i) == "-" && this.signum() == 0) mi = true;
				continue;
			}
			w = b * w + x;
			if (++j >= cs) {
				this.dMultiply(d);
				this.dAddOffset(w, 0);
				j = 0;
				w = 0;
			}
		}
		if (j > 0) {
			this.dMultiply(Math.pow(b, j));
			this.dAddOffset(w, 0);
		}
		if (mi) BigInteger.ZERO.subTo(this, this);
	};

	// (protected) alternate constructor
	BigInteger.prototype.fromNumber = function (a, b, c) {
		if ("number" == typeof b) {
			// new BigInteger(int,int,RNG)
			if (a < 2) this.fromInt(1);
			else {
				this.fromNumber(a, c);
				if (!this.testBit(a - 1))	// force MSB set
					this.bitwiseTo(BigInteger.ONE.shiftLeft(a - 1), op_or, this);
				if (this.isEven()) this.dAddOffset(1, 0); // force odd
				while (!this.isProbablePrime(b)) {
					this.dAddOffset(2, 0);
					if (this.bitLength() > a) this.subTo(BigInteger.ONE.shiftLeft(a - 1), this);
				}
			}
		}
		else {
			// new BigInteger(int,RNG)
			var x = new Array(), t = a & 7;
			x.length = (a >> 3) + 1;
			b.nextBytes(x);
			if (t > 0) x[0] &= ((1 << t) - 1); else x[0] = 0;
			this.fromString(x, 256);
		}
	};

	// (protected) r = this op a (bitwise)
	BigInteger.prototype.bitwiseTo = function (a, op, r) {
		var i, f, m = Math.min(a.t, this.t);
		for (i = 0; i < m; ++i) r[i] = op(this[i], a[i]);
		if (a.t < this.t) {
			f = a.s & this.DM;
			for (i = m; i < this.t; ++i) r[i] = op(this[i], f);
			r.t = this.t;
		}
		else {
			f = this.s & this.DM;
			for (i = m; i < a.t; ++i) r[i] = op(f, a[i]);
			r.t = a.t;
		}
		r.s = op(this.s, a.s);
		r.clamp();
	};

	// (protected) this op (1<<n)
	BigInteger.prototype.changeBit = function (n, op) {
		var r = BigInteger.ONE.shiftLeft(n);
		this.bitwiseTo(r, op, r);
		return r;
	};

	// (protected) r = this + a
	BigInteger.prototype.addTo = function (a, r) {
		var i = 0, c = 0, m = Math.min(a.t, this.t);
		while (i < m) {
			c += this[i] + a[i];
			r[i++] = c & this.DM;
			c >>= this.DB;
		}
		if (a.t < this.t) {
			c += a.s;
			while (i < this.t) {
				c += this[i];
				r[i++] = c & this.DM;
				c >>= this.DB;
			}
			c += this.s;
		}
		else {
			c += this.s;
			while (i < a.t) {
				c += a[i];
				r[i++] = c & this.DM;
				c >>= this.DB;
			}
			c += a.s;
		}
		r.s = (c < 0) ? -1 : 0;
		if (c > 0) r[i++] = c;
		else if (c < -1) r[i++] = this.DV + c;
		r.t = i;
		r.clamp();
	};

	// (protected) this *= n, this >= 0, 1 < n < DV
	BigInteger.prototype.dMultiply = function (n) {
		this[this.t] = this.am(0, n - 1, this, 0, 0, this.t);
		++this.t;
		this.clamp();
	};

	// (protected) this += n << w words, this >= 0
	BigInteger.prototype.dAddOffset = function (n, w) {
		if (n == 0) return;
		while (this.t <= w) this[this.t++] = 0;
		this[w] += n;
		while (this[w] >= this.DV) {
			this[w] -= this.DV;
			if (++w >= this.t) this[this.t++] = 0;
			++this[w];
		}
	};

	// (protected) r = lower n words of "this * a", a.t <= n
	// "this" should be the larger one if appropriate.
	BigInteger.prototype.multiplyLowerTo = function (a, n, r) {
		var i = Math.min(this.t + a.t, n);
		r.s = 0; // assumes a,this >= 0
		r.t = i;
		while (i > 0) r[--i] = 0;
		var j;
		for (j = r.t - this.t; i < j; ++i) r[i + this.t] = this.am(0, a[i], r, i, 0, this.t);
		for (j = Math.min(a.t, n); i < j; ++i) this.am(0, a[i], r, i, 0, n - i);
		r.clamp();
	};


	// (protected) r = "this * a" without lower n words, n > 0
	// "this" should be the larger one if appropriate.
	BigInteger.prototype.multiplyUpperTo = function (a, n, r) {
		--n;
		var i = r.t = this.t + a.t - n;
		r.s = 0; // assumes a,this >= 0
		while (--i >= 0) r[i] = 0;
		for (i = Math.max(n - this.t, 0); i < a.t; ++i)
			r[this.t + i - n] = this.am(n - i, a[i], r, 0, 0, this.t + i - n);
		r.clamp();
		r.drShiftTo(1, r);
	};

	// (protected) this % n, n < 2^26
	BigInteger.prototype.modInt = function (n) {
		if (n <= 0) return 0;
		var d = this.DV % n, r = (this.s < 0) ? n - 1 : 0;
		if (this.t > 0)
			if (d == 0) r = this[0] % n;
			else for (var i = this.t - 1; i >= 0; --i) r = (d * r + this[i]) % n;
		return r;
	};


	// (protected) true if probably prime (HAC 4.24, Miller-Rabin)
	BigInteger.prototype.millerRabin = function (t) {
		var n1 = this.subtract(BigInteger.ONE);
		var k = n1.getLowestSetBit();
		if (k <= 0) return false;
		var r = n1.shiftRight(k);
		t = (t + 1) >> 1;
		if (t > lowprimes.length) t = lowprimes.length;
		var a = nbi();
		for (var i = 0; i < t; ++i) {
			//Pick bases at random, instead of starting at 2
			a.fromInt(lowprimes[Math.floor(Math.random() * lowprimes.length)]);
			var y = a.modPow(r, this);
			if (y.compareTo(BigInteger.ONE) != 0 && y.compareTo(n1) != 0) {
				var j = 1;
				while (j++ < k && y.compareTo(n1) != 0) {
					y = y.modPowInt(2, this);
					if (y.compareTo(BigInteger.ONE) == 0) return false;
				}
				if (y.compareTo(n1) != 0) return false;
			}
		}
		return true;
	};



	// (public)
	BigInteger.prototype.clone = function () { var r = nbi(); this.copyTo(r); return r; };

	// (public) return value as integer
	BigInteger.prototype.intValue = function () {
		if (this.s < 0) {
			if (this.t == 1) return this[0] - this.DV;
			else if (this.t == 0) return -1;
		}
		else if (this.t == 1) return this[0];
		else if (this.t == 0) return 0;
		// assumes 16 < DB < 32
		return ((this[1] & ((1 << (32 - this.DB)) - 1)) << this.DB) | this[0];
	};


	// (public) return value as byte
	BigInteger.prototype.byteValue = function () { return (this.t == 0) ? this.s : (this[0] << 24) >> 24; };

	// (public) return value as short (assumes DB>=16)
	BigInteger.prototype.shortValue = function () { return (this.t == 0) ? this.s : (this[0] << 16) >> 16; };

	// (public) 0 if this == 0, 1 if this > 0
	BigInteger.prototype.signum = function () {
		if (this.s < 0) return -1;
		else if (this.t <= 0 || (this.t == 1 && this[0] <= 0)) return 0;
		else return 1;
	};


	// (public) convert to bigendian byte array
	BigInteger.prototype.toByteArray = function () {
		var i = this.t, r = new Array();
		r[0] = this.s;
		var p = this.DB - (i * this.DB) % 8, d, k = 0;
		if (i-- > 0) {
			if (p < this.DB && (d = this[i] >> p) != (this.s & this.DM) >> p)
				r[k++] = d | (this.s << (this.DB - p));
			while (i >= 0) {
				if (p < 8) {
					d = (this[i] & ((1 << p) - 1)) << (8 - p);
					d |= this[--i] >> (p += this.DB - 8);
				}
				else {
					d = (this[i] >> (p -= 8)) & 0xff;
					if (p <= 0) { p += this.DB; --i; }
				}
				if ((d & 0x80) != 0) d |= -256;
				if (k == 0 && (this.s & 0x80) != (d & 0x80)) ++k;
				if (k > 0 || d != this.s) r[k++] = d;
			}
		}
		return r;
	};

	BigInteger.prototype.equals = function (a) { return (this.compareTo(a) == 0); };
	BigInteger.prototype.min = function (a) { return (this.compareTo(a) < 0) ? this : a; };
	BigInteger.prototype.max = function (a) { return (this.compareTo(a) > 0) ? this : a; };

	// (public) this & a
	function op_and(x, y) { return x & y; }
	BigInteger.prototype.and = function (a) { var r = nbi(); this.bitwiseTo(a, op_and, r); return r; };

	// (public) this | a
	function op_or(x, y) { return x | y; }
	BigInteger.prototype.or = function (a) { var r = nbi(); this.bitwiseTo(a, op_or, r); return r; };

	// (public) this ^ a
	function op_xor(x, y) { return x ^ y; }
	BigInteger.prototype.xor = function (a) { var r = nbi(); this.bitwiseTo(a, op_xor, r); return r; };

	// (public) this & ~a
	function op_andnot(x, y) { return x & ~y; }
	BigInteger.prototype.andNot = function (a) { var r = nbi(); this.bitwiseTo(a, op_andnot, r); return r; };

	// (public) ~this
	BigInteger.prototype.not = function () {
		var r = nbi();
		for (var i = 0; i < this.t; ++i) r[i] = this.DM & ~this[i];
		r.t = this.t;
		r.s = ~this.s;
		return r;
	};

	// (public) this << n
	BigInteger.prototype.shiftLeft = function (n) {
		var r = nbi();
		if (n < 0) this.rShiftTo(-n, r); else this.lShiftTo(n, r);
		return r;
	};

	// (public) this >> n
	BigInteger.prototype.shiftRight = function (n) {
		var r = nbi();
		if (n < 0) this.lShiftTo(-n, r); else this.rShiftTo(n, r);
		return r;
	};

	// (public) returns index of lowest 1-bit (or -1 if none)
	BigInteger.prototype.getLowestSetBit = function () {
		for (var i = 0; i < this.t; ++i)
			if (this[i] != 0) return i * this.DB + lbit(this[i]);
		if (this.s < 0) return this.t * this.DB;
		return -1;
	};

	// (public) return number of set bits
	BigInteger.prototype.bitCount = function () {
		var r = 0, x = this.s & this.DM;
		for (var i = 0; i < this.t; ++i) r += cbit(this[i] ^ x);
		return r;
	};

	// (public) true iff nth bit is set
	BigInteger.prototype.testBit = function (n) {
		var j = Math.floor(n / this.DB);
		if (j >= this.t) return (this.s != 0);
		return ((this[j] & (1 << (n % this.DB))) != 0);
	};

	// (public) this | (1<<n)
	BigInteger.prototype.setBit = function (n) { return this.changeBit(n, op_or); };
	// (public) this & ~(1<<n)
	BigInteger.prototype.clearBit = function (n) { return this.changeBit(n, op_andnot); };
	// (public) this ^ (1<<n)
	BigInteger.prototype.flipBit = function (n) { return this.changeBit(n, op_xor); };
	// (public) this + a
	BigInteger.prototype.add = function (a) { var r = nbi(); this.addTo(a, r); return r; };
	// (public) this - a
	BigInteger.prototype.subtract = function (a) { var r = nbi(); this.subTo(a, r); return r; };
	// (public) this * a
	BigInteger.prototype.multiply = function (a) { var r = nbi(); this.multiplyTo(a, r); return r; };
	// (public) this / a
	BigInteger.prototype.divide = function (a) { var r = nbi(); this.divRemTo(a, r, null); return r; };
	// (public) this % a
	BigInteger.prototype.remainder = function (a) { var r = nbi(); this.divRemTo(a, null, r); return r; };
	// (public) [this/a,this%a]
	BigInteger.prototype.divideAndRemainder = function (a) {
		var q = nbi(), r = nbi();
		this.divRemTo(a, q, r);
		return new Array(q, r);
	};

	// (public) this^e % m (HAC 14.85)
	BigInteger.prototype.modPow = function (e, m) {
		var i = e.bitLength(), k, r = nbv(1), z;
		if (i <= 0) return r;
		else if (i < 18) k = 1;
		else if (i < 48) k = 3;
		else if (i < 144) k = 4;
		else if (i < 768) k = 5;
		else k = 6;
		if (i < 8)
			z = new Classic(m);
		else if (m.isEven())
			z = new Barrett(m);
		else
			z = new Montgomery(m);

		// precomputation
		var g = new Array(), n = 3, k1 = k - 1, km = (1 << k) - 1;
		g[1] = z.convert(this);
		if (k > 1) {
			var g2 = nbi();
			z.sqrTo(g[1], g2);
			while (n <= km) {
				g[n] = nbi();
				z.mulTo(g2, g[n - 2], g[n]);
				n += 2;
			}
		}

		var j = e.t - 1, w, is1 = true, r2 = nbi(), t;
		i = nbits(e[j]) - 1;
		while (j >= 0) {
			if (i >= k1) w = (e[j] >> (i - k1)) & km;
			else {
				w = (e[j] & ((1 << (i + 1)) - 1)) << (k1 - i);
				if (j > 0) w |= e[j - 1] >> (this.DB + i - k1);
			}

			n = k;
			while ((w & 1) == 0) { w >>= 1; --n; }
			if ((i -= n) < 0) { i += this.DB; --j; }
			if (is1) {	// ret == 1, don't bother squaring or multiplying it
				g[w].copyTo(r);
				is1 = false;
			}
			else {
				while (n > 1) { z.sqrTo(r, r2); z.sqrTo(r2, r); n -= 2; }
				if (n > 0) z.sqrTo(r, r2); else { t = r; r = r2; r2 = t; }
				z.mulTo(r2, g[w], r);
			}

			while (j >= 0 && (e[j] & (1 << i)) == 0) {
				z.sqrTo(r, r2); t = r; r = r2; r2 = t;
				if (--i < 0) { i = this.DB - 1; --j; }
			}
		}
		return z.revert(r);
	};

	// (public) 1/this % m (HAC 14.61)
	BigInteger.prototype.modInverse = function (m) {
		var ac = m.isEven();
		if ((this.isEven() && ac) || m.signum() == 0) return BigInteger.ZERO;
		var u = m.clone(), v = this.clone();
		var a = nbv(1), b = nbv(0), c = nbv(0), d = nbv(1);
		while (u.signum() != 0) {
			while (u.isEven()) {
				u.rShiftTo(1, u);
				if (ac) {
					if (!a.isEven() || !b.isEven()) { a.addTo(this, a); b.subTo(m, b); }
					a.rShiftTo(1, a);
				}
				else if (!b.isEven()) b.subTo(m, b);
				b.rShiftTo(1, b);
			}
			while (v.isEven()) {
				v.rShiftTo(1, v);
				if (ac) {
					if (!c.isEven() || !d.isEven()) { c.addTo(this, c); d.subTo(m, d); }
					c.rShiftTo(1, c);
				}
				else if (!d.isEven()) d.subTo(m, d);
				d.rShiftTo(1, d);
			}
			if (u.compareTo(v) >= 0) {
				u.subTo(v, u);
				if (ac) a.subTo(c, a);
				b.subTo(d, b);
			}
			else {
				v.subTo(u, v);
				if (ac) c.subTo(a, c);
				d.subTo(b, d);
			}
		}
		if (v.compareTo(BigInteger.ONE) != 0) return BigInteger.ZERO;
		if (d.compareTo(m) >= 0) return d.subtract(m);
		if (d.signum() < 0) d.addTo(m, d); else return d;
		if (d.signum() < 0) return d.add(m); else return d;
	};


	// (public) this^e
	BigInteger.prototype.pow = function (e) { return this.exp(e, new NullExp()); };

	// (public) gcd(this,a) (HAC 14.54)
	BigInteger.prototype.gcd = function (a) {
		var x = (this.s < 0) ? this.negate() : this.clone();
		var y = (a.s < 0) ? a.negate() : a.clone();
		if (x.compareTo(y) < 0) { var t = x; x = y; y = t; }
		var i = x.getLowestSetBit(), g = y.getLowestSetBit();
		if (g < 0) return x;
		if (i < g) g = i;
		if (g > 0) {
			x.rShiftTo(g, x);
			y.rShiftTo(g, y);
		}
		while (x.signum() > 0) {
			if ((i = x.getLowestSetBit()) > 0) x.rShiftTo(i, x);
			if ((i = y.getLowestSetBit()) > 0) y.rShiftTo(i, y);
			if (x.compareTo(y) >= 0) {
				x.subTo(y, x);
				x.rShiftTo(1, x);
			}
			else {
				y.subTo(x, y);
				y.rShiftTo(1, y);
			}
		}
		if (g > 0) y.lShiftTo(g, y);
		return y;
	};

	// (public) test primality with certainty >= 1-.5^t
	BigInteger.prototype.isProbablePrime = function (t) {
		var i, x = this.abs();
		if (x.t == 1 && x[0] <= lowprimes[lowprimes.length - 1]) {
			for (i = 0; i < lowprimes.length; ++i)
				if (x[0] == lowprimes[i]) return true;
			return false;
		}
		if (x.isEven()) return false;
		i = 1;
		while (i < lowprimes.length) {
			var m = lowprimes[i], j = i + 1;
			while (j < lowprimes.length && m < lplim) m *= lowprimes[j++];
			m = x.modInt(m);
			while (i < j) if (m % lowprimes[i++] == 0) return false;
		}
		return x.millerRabin(t);
	};


	// JSBN-specific extension

	// (public) this^2
	BigInteger.prototype.square = function () { var r = nbi(); this.squareTo(r); return r; };


	// NOTE: BigInteger interfaces not implemented in jsbn:
	// BigInteger(int signum, byte[] magnitude)
	// double doubleValue()
	// float floatValue()
	// int hashCode()
	// long longValue()
	// static BigInteger valueOf(long val)



	// Copyright Stephan Thomas (start) --- //
	// https://raw.github.com/bitcoinjs/bitcoinjs-lib/07f9d55ccb6abd962efb6befdd37671f85ea4ff9/src/util.js
	// BigInteger monkey patching
	BigInteger.valueOf = nbv;

	/**
	* Returns a byte array representation of the big integer.
	*
	* This returns the absolute of the contained value in big endian
	* form. A value of zero results in an empty array.
	*/
	BigInteger.prototype.toByteArrayUnsigned = function () {
		var ba = this.abs().toByteArray();
		if (ba.length) {
			if (ba[0] == 0) {
				ba = ba.slice(1);
			}
			return ba.map(function (v) {
				return (v < 0) ? v + 256 : v;
			});
		} else {
			// Empty array, nothing to do
			return ba;
		}
	};

	/**
	* Turns a byte array into a big integer.
	*
	* This function will interpret a byte array as a big integer in big
	* endian notation and ignore leading zeros.
	*/
	BigInteger.fromByteArrayUnsigned = function (ba) {
		if (!ba.length) {
			return ba.valueOf(0);
		} else if (ba[0] & 0x80) {
			// Prepend a zero so the BigInteger class doesn't mistake this
			// for a negative integer.
			return new BigInteger([0].concat(ba));
		} else {
			return new BigInteger(ba);
		}
	};

	/**
	* Converts big integer to signed byte representation.
	*
	* The format for this value uses a the most significant bit as a sign
	* bit. If the most significant bit is already occupied by the
	* absolute value, an extra byte is prepended and the sign bit is set
	* there.
	*
	* Examples:
	*
	*      0 =>     0x00
	*      1 =>     0x01
	*     -1 =>     0x81
	*    127 =>     0x7f
	*   -127 =>     0xff
	*    128 =>   0x0080
	*   -128 =>   0x8080
	*    255 =>   0x00ff
	*   -255 =>   0x80ff
	*  16300 =>   0x3fac
	* -16300 =>   0xbfac
	*  62300 => 0x00f35c
	* -62300 => 0x80f35c
	*/
	BigInteger.prototype.toByteArraySigned = function () {
		var val = this.abs().toByteArrayUnsigned();
		var neg = this.compareTo(BigInteger.ZERO) < 0;

		if (neg) {
			if (val[0] & 0x80) {
				val.unshift(0x80);
			} else {
				val[0] |= 0x80;
			}
		} else {
			if (val[0] & 0x80) {
				val.unshift(0x00);
			}
		}

		return val;
	};

	/**
	* Parse a signed big integer byte representation.
	*
	* For details on the format please see BigInteger.toByteArraySigned.
	*/
	BigInteger.fromByteArraySigned = function (ba) {
		// Check for negative value
		if (ba[0] & 0x80) {
			// Remove sign bit
			ba[0] &= 0x7f;

			return BigInteger.fromByteArrayUnsigned(ba).negate();
		} else {
			return BigInteger.fromByteArrayUnsigned(ba);
		}
	};
	// Copyright Stephan Thomas (end) --- //




	// ****** REDUCTION ******* //

	// Modular reduction using "classic" algorithm
	var Classic = window.Classic = function Classic(m) { this.m = m; }
	Classic.prototype.convert = function (x) {
		if (x.s < 0 || x.compareTo(this.m) >= 0) return x.mod(this.m);
		else return x;
	};
	Classic.prototype.revert = function (x) { return x; };
	Classic.prototype.reduce = function (x) { x.divRemTo(this.m, null, x); };
	Classic.prototype.mulTo = function (x, y, r) { x.multiplyTo(y, r); this.reduce(r); };
	Classic.prototype.sqrTo = function (x, r) { x.squareTo(r); this.reduce(r); };





	// Montgomery reduction
	var Montgomery = window.Montgomery = function Montgomery(m) {
		this.m = m;
		this.mp = m.invDigit();
		this.mpl = this.mp & 0x7fff;
		this.mph = this.mp >> 15;
		this.um = (1 << (m.DB - 15)) - 1;
		this.mt2 = 2 * m.t;
	}
	// xR mod m
	Montgomery.prototype.convert = function (x) {
		var r = nbi();
		x.abs().dlShiftTo(this.m.t, r);
		r.divRemTo(this.m, null, r);
		if (x.s < 0 && r.compareTo(BigInteger.ZERO) > 0) this.m.subTo(r, r);
		return r;
	}
	// x/R mod m
	Montgomery.prototype.revert = function (x) {
		var r = nbi();
		x.copyTo(r);
		this.reduce(r);
		return r;
	};
	// x = x/R mod m (HAC 14.32)
	Montgomery.prototype.reduce = function (x) {
		while (x.t <= this.mt2)	// pad x so am has enough room later
			x[x.t++] = 0;
		for (var i = 0; i < this.m.t; ++i) {
			// faster way of calculating u0 = x[i]*mp mod DV
			var j = x[i] & 0x7fff;
			var u0 = (j * this.mpl + (((j * this.mph + (x[i] >> 15) * this.mpl) & this.um) << 15)) & x.DM;
			// use am to combine the multiply-shift-add into one call
			j = i + this.m.t;
			x[j] += this.m.am(0, u0, x, i, 0, this.m.t);
			// propagate carry
			while (x[j] >= x.DV) { x[j] -= x.DV; x[++j]++; }
		}
		x.clamp();
		x.drShiftTo(this.m.t, x);
		if (x.compareTo(this.m) >= 0) x.subTo(this.m, x);
	};
	// r = "xy/R mod m"; x,y != r
	Montgomery.prototype.mulTo = function (x, y, r) { x.multiplyTo(y, r); this.reduce(r); };
	// r = "x^2/R mod m"; x != r
	Montgomery.prototype.sqrTo = function (x, r) { x.squareTo(r); this.reduce(r); };





	// A "null" reducer
	var NullExp = window.NullExp = function NullExp() { }
	NullExp.prototype.convert = function (x) { return x; };
	NullExp.prototype.revert = function (x) { return x; };
	NullExp.prototype.mulTo = function (x, y, r) { x.multiplyTo(y, r); };
	NullExp.prototype.sqrTo = function (x, r) { x.squareTo(r); };





	// Barrett modular reduction
	var Barrett = window.Barrett = function Barrett(m) {
		// setup Barrett
		this.r2 = nbi();
		this.q3 = nbi();
		BigInteger.ONE.dlShiftTo(2 * m.t, this.r2);
		this.mu = this.r2.divide(m);
		this.m = m;
	}
	Barrett.prototype.convert = function (x) {
		if (x.s < 0 || x.t > 2 * this.m.t) return x.mod(this.m);
		else if (x.compareTo(this.m) < 0) return x;
		else { var r = nbi(); x.copyTo(r); this.reduce(r); return r; }
	};
	Barrett.prototype.revert = function (x) { return x; };
	// x = x mod m (HAC 14.42)
	Barrett.prototype.reduce = function (x) {
		x.drShiftTo(this.m.t - 1, this.r2);
		if (x.t > this.m.t + 1) { x.t = this.m.t + 1; x.clamp(); }
		this.mu.multiplyUpperTo(this.r2, this.m.t + 1, this.q3);
		this.m.multiplyLowerTo(this.q3, this.m.t + 1, this.r2);
		while (x.compareTo(this.r2) < 0) x.dAddOffset(1, this.m.t + 1);
		x.subTo(this.r2, x);
		while (x.compareTo(this.m) >= 0) x.subTo(this.m, x);
	};
	// r = x*y mod m; x,y != r
	Barrett.prototype.mulTo = function (x, y, r) { x.multiplyTo(y, r); this.reduce(r); };
	// r = x^2 mod m; x != r
	Barrett.prototype.sqrTo = function (x, r) { x.squareTo(r); this.reduce(r); };

})();
	</script>
	<script type="text/javascript">
//---------------------------------------------------------------------
// QRCode for JavaScript
//
// Copyright (c) 2009 Kazuhiko Arase
//
// URL: http://www.d-project.com/
//
// Licensed under the MIT license:
//   http://www.opensource.org/licenses/mit-license.php
//
// The word "QR Code" is registered trademark of 
// DENSO WAVE INCORPORATED
//   http://www.denso-wave.com/qrcode/faqpatent-e.html
//
//---------------------------------------------------------------------

(function () {
	//---------------------------------------------------------------------
	// QRCode
	//---------------------------------------------------------------------

	var QRCode = window.QRCode = function (typeNumber, errorCorrectLevel) {
		this.typeNumber = typeNumber;
		this.errorCorrectLevel = errorCorrectLevel;
		this.modules = null;
		this.moduleCount = 0;
		this.dataCache = null;
		this.dataList = new Array();
	}

	QRCode.prototype = {

		addData: function (data) {
			var newData = new QRCode.QR8bitByte(data);
			this.dataList.push(newData);
			this.dataCache = null;
		},

		isDark: function (row, col) {
			if (row < 0 || this.moduleCount <= row || col < 0 || this.moduleCount <= col) {
				throw new Error(row + "," + col);
			}
			return this.modules[row][col];
		},

		getModuleCount: function () {
			return this.moduleCount;
		},

		make: function () {
			this.makeImpl(false, this.getBestMaskPattern());
		},

		makeImpl: function (test, maskPattern) {

			this.moduleCount = this.typeNumber * 4 + 17;
			this.modules = new Array(this.moduleCount);

			for (var row = 0; row < this.moduleCount; row++) {

				this.modules[row] = new Array(this.moduleCount);

				for (var col = 0; col < this.moduleCount; col++) {
					this.modules[row][col] = null; //(col + row) % 3;
				}
			}

			this.setupPositionProbePattern(0, 0);
			this.setupPositionProbePattern(this.moduleCount - 7, 0);
			this.setupPositionProbePattern(0, this.moduleCount - 7);
			this.setupPositionAdjustPattern();
			this.setupTimingPattern();
			this.setupTypeInfo(test, maskPattern);

			if (this.typeNumber >= 7) {
				this.setupTypeNumber(test);
			}

			if (this.dataCache == null) {
				this.dataCache = QRCode.createData(this.typeNumber, this.errorCorrectLevel, this.dataList);
			}

			this.mapData(this.dataCache, maskPattern);
		},

		setupPositionProbePattern: function (row, col) {

			for (var r = -1; r <= 7; r++) {

				if (row + r <= -1 || this.moduleCount <= row + r) continue;

				for (var c = -1; c <= 7; c++) {

					if (col + c <= -1 || this.moduleCount <= col + c) continue;

					if ((0 <= r && r <= 6 && (c == 0 || c == 6))
						|| (0 <= c && c <= 6 && (r == 0 || r == 6))
						|| (2 <= r && r <= 4 && 2 <= c && c <= 4)) {
						this.modules[row + r][col + c] = true;
					} else {
						this.modules[row + r][col + c] = false;
					}
				}
			}
		},

		getBestMaskPattern: function () {

			var minLostPoint = 0;
			var pattern = 0;

			for (var i = 0; i < 8; i++) {

				this.makeImpl(true, i);

				var lostPoint = QRCode.Util.getLostPoint(this);

				if (i == 0 || minLostPoint > lostPoint) {
					minLostPoint = lostPoint;
					pattern = i;
				}
			}

			return pattern;
		},

		createMovieClip: function (target_mc, instance_name, depth) {

			var qr_mc = target_mc.createEmptyMovieClip(instance_name, depth);
			var cs = 1;

			this.make();

			for (var row = 0; row < this.modules.length; row++) {

				var y = row * cs;

				for (var col = 0; col < this.modules[row].length; col++) {

					var x = col * cs;
					var dark = this.modules[row][col];

					if (dark) {
						qr_mc.beginFill(0, 100);
						qr_mc.moveTo(x, y);
						qr_mc.lineTo(x + cs, y);
						qr_mc.lineTo(x + cs, y + cs);
						qr_mc.lineTo(x, y + cs);
						qr_mc.endFill();
					}
				}
			}

			return qr_mc;
		},

		setupTimingPattern: function () {

			for (var r = 8; r < this.moduleCount - 8; r++) {
				if (this.modules[r][6] != null) {
					continue;
				}
				this.modules[r][6] = (r % 2 == 0);
			}

			for (var c = 8; c < this.moduleCount - 8; c++) {
				if (this.modules[6][c] != null) {
					continue;
				}
				this.modules[6][c] = (c % 2 == 0);
			}
		},

		setupPositionAdjustPattern: function () {

			var pos = QRCode.Util.getPatternPosition(this.typeNumber);

			for (var i = 0; i < pos.length; i++) {

				for (var j = 0; j < pos.length; j++) {

					var row = pos[i];
					var col = pos[j];

					if (this.modules[row][col] != null) {
						continue;
					}

					for (var r = -2; r <= 2; r++) {

						for (var c = -2; c <= 2; c++) {

							if (r == -2 || r == 2 || c == -2 || c == 2
								|| (r == 0 && c == 0)) {
								this.modules[row + r][col + c] = true;
							} else {
								this.modules[row + r][col + c] = false;
							}
						}
					}
				}
			}
		},

		setupTypeNumber: function (test) {

			var bits = QRCode.Util.getBCHTypeNumber(this.typeNumber);

			for (var i = 0; i < 18; i++) {
				var mod = (!test && ((bits >> i) & 1) == 1);
				this.modules[Math.floor(i / 3)][i % 3 + this.moduleCount - 8 - 3] = mod;
			}

			for (var i = 0; i < 18; i++) {
				var mod = (!test && ((bits >> i) & 1) == 1);
				this.modules[i % 3 + this.moduleCount - 8 - 3][Math.floor(i / 3)] = mod;
			}
		},

		setupTypeInfo: function (test, maskPattern) {

			var data = (this.errorCorrectLevel << 3) | maskPattern;
			var bits = QRCode.Util.getBCHTypeInfo(data);

			// vertical		
			for (var i = 0; i < 15; i++) {

				var mod = (!test && ((bits >> i) & 1) == 1);

				if (i < 6) {
					this.modules[i][8] = mod;
				} else if (i < 8) {
					this.modules[i + 1][8] = mod;
				} else {
					this.modules[this.moduleCount - 15 + i][8] = mod;
				}
			}

			// horizontal
			for (var i = 0; i < 15; i++) {

				var mod = (!test && ((bits >> i) & 1) == 1);

				if (i < 8) {
					this.modules[8][this.moduleCount - i - 1] = mod;
				} else if (i < 9) {
					this.modules[8][15 - i - 1 + 1] = mod;
				} else {
					this.modules[8][15 - i - 1] = mod;
				}
			}

			// fixed module
			this.modules[this.moduleCount - 8][8] = (!test);

		},

		mapData: function (data, maskPattern) {

			var inc = -1;
			var row = this.moduleCount - 1;
			var bitIndex = 7;
			var byteIndex = 0;

			for (var col = this.moduleCount - 1; col > 0; col -= 2) {

				if (col == 6) col--;

				while (true) {

					for (var c = 0; c < 2; c++) {

						if (this.modules[row][col - c] == null) {

							var dark = false;

							if (byteIndex < data.length) {
								dark = (((data[byteIndex] >>> bitIndex) & 1) == 1);
							}

							var mask = QRCode.Util.getMask(maskPattern, row, col - c);

							if (mask) {
								dark = !dark;
							}

							this.modules[row][col - c] = dark;
							bitIndex--;

							if (bitIndex == -1) {
								byteIndex++;
								bitIndex = 7;
							}
						}
					}

					row += inc;

					if (row < 0 || this.moduleCount <= row) {
						row -= inc;
						inc = -inc;
						break;
					}
				}
			}

		}

	};

	QRCode.PAD0 = 0xEC;
	QRCode.PAD1 = 0x11;

	QRCode.createData = function (typeNumber, errorCorrectLevel, dataList) {

		var rsBlocks = QRCode.RSBlock.getRSBlocks(typeNumber, errorCorrectLevel);

		var buffer = new QRCode.BitBuffer();

		for (var i = 0; i < dataList.length; i++) {
			var data = dataList[i];
			buffer.put(data.mode, 4);
			buffer.put(data.getLength(), QRCode.Util.getLengthInBits(data.mode, typeNumber));
			data.write(buffer);
		}

		// calc num max data.
		var totalDataCount = 0;
		for (var i = 0; i < rsBlocks.length; i++) {
			totalDataCount += rsBlocks[i].dataCount;
		}

		if (buffer.getLengthInBits() > totalDataCount * 8) {
			throw new Error("code length overflow. ("
			+ buffer.getLengthInBits()
			+ ">"
			+ totalDataCount * 8
			+ ")");
		}

		// end code
		if (buffer.getLengthInBits() + 4 <= totalDataCount * 8) {
			buffer.put(0, 4);
		}

		// padding
		while (buffer.getLengthInBits() % 8 != 0) {
			buffer.putBit(false);
		}

		// padding
		while (true) {

			if (buffer.getLengthInBits() >= totalDataCount * 8) {
				break;
			}
			buffer.put(QRCode.PAD0, 8);

			if (buffer.getLengthInBits() >= totalDataCount * 8) {
				break;
			}
			buffer.put(QRCode.PAD1, 8);
		}

		return QRCode.createBytes(buffer, rsBlocks);
	};

	QRCode.createBytes = function (buffer, rsBlocks) {

		var offset = 0;

		var maxDcCount = 0;
		var maxEcCount = 0;

		var dcdata = new Array(rsBlocks.length);
		var ecdata = new Array(rsBlocks.length);

		for (var r = 0; r < rsBlocks.length; r++) {

			var dcCount = rsBlocks[r].dataCount;
			var ecCount = rsBlocks[r].totalCount - dcCount;

			maxDcCount = Math.max(maxDcCount, dcCount);
			maxEcCount = Math.max(maxEcCount, ecCount);

			dcdata[r] = new Array(dcCount);

			for (var i = 0; i < dcdata[r].length; i++) {
				dcdata[r][i] = 0xff & buffer.buffer[i + offset];
			}
			offset += dcCount;

			var rsPoly = QRCode.Util.getErrorCorrectPolynomial(ecCount);
			var rawPoly = new QRCode.Polynomial(dcdata[r], rsPoly.getLength() - 1);

			var modPoly = rawPoly.mod(rsPoly);
			ecdata[r] = new Array(rsPoly.getLength() - 1);
			for (var i = 0; i < ecdata[r].length; i++) {
				var modIndex = i + modPoly.getLength() - ecdata[r].length;
				ecdata[r][i] = (modIndex >= 0) ? modPoly.get(modIndex) : 0;
			}

		}

		var totalCodeCount = 0;
		for (var i = 0; i < rsBlocks.length; i++) {
			totalCodeCount += rsBlocks[i].totalCount;
		}

		var data = new Array(totalCodeCount);
		var index = 0;

		for (var i = 0; i < maxDcCount; i++) {
			for (var r = 0; r < rsBlocks.length; r++) {
				if (i < dcdata[r].length) {
					data[index++] = dcdata[r][i];
				}
			}
		}

		for (var i = 0; i < maxEcCount; i++) {
			for (var r = 0; r < rsBlocks.length; r++) {
				if (i < ecdata[r].length) {
					data[index++] = ecdata[r][i];
				}
			}
		}

		return data;

	};

	//---------------------------------------------------------------------
	// QR8bitByte
	//---------------------------------------------------------------------
	QRCode.QR8bitByte = function (data) {
		this.mode = QRCode.Mode.MODE_8BIT_BYTE;
		this.data = data;
	}

	QRCode.QR8bitByte.prototype = {
		getLength: function (buffer) {
			return this.data.length;
		},

		write: function (buffer) {
			for (var i = 0; i < this.data.length; i++) {
				// not JIS ...
				buffer.put(this.data.charCodeAt(i), 8);
			}
		}
	};


	//---------------------------------------------------------------------
	// QRMode
	//---------------------------------------------------------------------
	QRCode.Mode = {
		MODE_NUMBER: 1 << 0,
		MODE_ALPHA_NUM: 1 << 1,
		MODE_8BIT_BYTE: 1 << 2,
		MODE_KANJI: 1 << 3
	};

	//---------------------------------------------------------------------
	// QRErrorCorrectLevel
	//---------------------------------------------------------------------
	QRCode.ErrorCorrectLevel = {
		L: 1,
		M: 0,
		Q: 3,
		H: 2
	};


	//---------------------------------------------------------------------
	// QRMaskPattern
	//---------------------------------------------------------------------
	QRCode.MaskPattern = {
		PATTERN000: 0,
		PATTERN001: 1,
		PATTERN010: 2,
		PATTERN011: 3,
		PATTERN100: 4,
		PATTERN101: 5,
		PATTERN110: 6,
		PATTERN111: 7
	};

	//---------------------------------------------------------------------
	// QRUtil
	//---------------------------------------------------------------------

	QRCode.Util = {

		PATTERN_POSITION_TABLE: [
		[],
		[6, 18],
		[6, 22],
		[6, 26],
		[6, 30],
		[6, 34],
		[6, 22, 38],
		[6, 24, 42],
		[6, 26, 46],
		[6, 28, 50],
		[6, 30, 54],
		[6, 32, 58],
		[6, 34, 62],
		[6, 26, 46, 66],
		[6, 26, 48, 70],
		[6, 26, 50, 74],
		[6, 30, 54, 78],
		[6, 30, 56, 82],
		[6, 30, 58, 86],
		[6, 34, 62, 90],
		[6, 28, 50, 72, 94],
		[6, 26, 50, 74, 98],
		[6, 30, 54, 78, 102],
		[6, 28, 54, 80, 106],
		[6, 32, 58, 84, 110],
		[6, 30, 58, 86, 114],
		[6, 34, 62, 90, 118],
		[6, 26, 50, 74, 98, 122],
		[6, 30, 54, 78, 102, 126],
		[6, 26, 52, 78, 104, 130],
		[6, 30, 56, 82, 108, 134],
		[6, 34, 60, 86, 112, 138],
		[6, 30, 58, 86, 114, 142],
		[6, 34, 62, 90, 118, 146],
		[6, 30, 54, 78, 102, 126, 150],
		[6, 24, 50, 76, 102, 128, 154],
		[6, 28, 54, 80, 106, 132, 158],
		[6, 32, 58, 84, 110, 136, 162],
		[6, 26, 54, 82, 110, 138, 166],
		[6, 30, 58, 86, 114, 142, 170]
	],

		G15: (1 << 10) | (1 << 8) | (1 << 5) | (1 << 4) | (1 << 2) | (1 << 1) | (1 << 0),
		G18: (1 << 12) | (1 << 11) | (1 << 10) | (1 << 9) | (1 << 8) | (1 << 5) | (1 << 2) | (1 << 0),
		G15_MASK: (1 << 14) | (1 << 12) | (1 << 10) | (1 << 4) | (1 << 1),

		getBCHTypeInfo: function (data) {
			var d = data << 10;
			while (QRCode.Util.getBCHDigit(d) - QRCode.Util.getBCHDigit(QRCode.Util.G15) >= 0) {
				d ^= (QRCode.Util.G15 << (QRCode.Util.getBCHDigit(d) - QRCode.Util.getBCHDigit(QRCode.Util.G15)));
			}
			return ((data << 10) | d) ^ QRCode.Util.G15_MASK;
		},

		getBCHTypeNumber: function (data) {
			var d = data << 12;
			while (QRCode.Util.getBCHDigit(d) - QRCode.Util.getBCHDigit(QRCode.Util.G18) >= 0) {
				d ^= (QRCode.Util.G18 << (QRCode.Util.getBCHDigit(d) - QRCode.Util.getBCHDigit(QRCode.Util.G18)));
			}
			return (data << 12) | d;
		},

		getBCHDigit: function (data) {

			var digit = 0;

			while (data != 0) {
				digit++;
				data >>>= 1;
			}

			return digit;
		},

		getPatternPosition: function (typeNumber) {
			return QRCode.Util.PATTERN_POSITION_TABLE[typeNumber - 1];
		},

		getMask: function (maskPattern, i, j) {

			switch (maskPattern) {

				case QRCode.MaskPattern.PATTERN000: return (i + j) % 2 == 0;
				case QRCode.MaskPattern.PATTERN001: return i % 2 == 0;
				case QRCode.MaskPattern.PATTERN010: return j % 3 == 0;
				case QRCode.MaskPattern.PATTERN011: return (i + j) % 3 == 0;
				case QRCode.MaskPattern.PATTERN100: return (Math.floor(i / 2) + Math.floor(j / 3)) % 2 == 0;
				case QRCode.MaskPattern.PATTERN101: return (i * j) % 2 + (i * j) % 3 == 0;
				case QRCode.MaskPattern.PATTERN110: return ((i * j) % 2 + (i * j) % 3) % 2 == 0;
				case QRCode.MaskPattern.PATTERN111: return ((i * j) % 3 + (i + j) % 2) % 2 == 0;

				default:
					throw new Error("bad maskPattern:" + maskPattern);
			}
		},

		getErrorCorrectPolynomial: function (errorCorrectLength) {

			var a = new QRCode.Polynomial([1], 0);

			for (var i = 0; i < errorCorrectLength; i++) {
				a = a.multiply(new QRCode.Polynomial([1, QRCode.Math.gexp(i)], 0));
			}

			return a;
		},

		getLengthInBits: function (mode, type) {

			if (1 <= type && type < 10) {

				// 1 - 9

				switch (mode) {
					case QRCode.Mode.MODE_NUMBER: return 10;
					case QRCode.Mode.MODE_ALPHA_NUM: return 9;
					case QRCode.Mode.MODE_8BIT_BYTE: return 8;
					case QRCode.Mode.MODE_KANJI: return 8;
					default:
						throw new Error("mode:" + mode);
				}

			} else if (type < 27) {

				// 10 - 26

				switch (mode) {
					case QRCode.Mode.MODE_NUMBER: return 12;
					case QRCode.Mode.MODE_ALPHA_NUM: return 11;
					case QRCode.Mode.MODE_8BIT_BYTE: return 16;
					case QRCode.Mode.MODE_KANJI: return 10;
					default:
						throw new Error("mode:" + mode);
				}

			} else if (type < 41) {

				// 27 - 40

				switch (mode) {
					case QRCode.Mode.MODE_NUMBER: return 14;
					case QRCode.Mode.MODE_ALPHA_NUM: return 13;
					case QRCode.Mode.MODE_8BIT_BYTE: return 16;
					case QRCode.Mode.MODE_KANJI: return 12;
					default:
						throw new Error("mode:" + mode);
				}

			} else {
				throw new Error("type:" + type);
			}
		},

		getLostPoint: function (qrCode) {

			var moduleCount = qrCode.getModuleCount();

			var lostPoint = 0;

			// LEVEL1

			for (var row = 0; row < moduleCount; row++) {

				for (var col = 0; col < moduleCount; col++) {

					var sameCount = 0;
					var dark = qrCode.isDark(row, col);

					for (var r = -1; r <= 1; r++) {

						if (row + r < 0 || moduleCount <= row + r) {
							continue;
						}

						for (var c = -1; c <= 1; c++) {

							if (col + c < 0 || moduleCount <= col + c) {
								continue;
							}

							if (r == 0 && c == 0) {
								continue;
							}

							if (dark == qrCode.isDark(row + r, col + c)) {
								sameCount++;
							}
						}
					}

					if (sameCount > 5) {
						lostPoint += (3 + sameCount - 5);
					}
				}
			}

			// LEVEL2

			for (var row = 0; row < moduleCount - 1; row++) {
				for (var col = 0; col < moduleCount - 1; col++) {
					var count = 0;
					if (qrCode.isDark(row, col)) count++;
					if (qrCode.isDark(row + 1, col)) count++;
					if (qrCode.isDark(row, col + 1)) count++;
					if (qrCode.isDark(row + 1, col + 1)) count++;
					if (count == 0 || count == 4) {
						lostPoint += 3;
					}
				}
			}

			// LEVEL3

			for (var row = 0; row < moduleCount; row++) {
				for (var col = 0; col < moduleCount - 6; col++) {
					if (qrCode.isDark(row, col)
						&& !qrCode.isDark(row, col + 1)
						&& qrCode.isDark(row, col + 2)
						&& qrCode.isDark(row, col + 3)
						&& qrCode.isDark(row, col + 4)
						&& !qrCode.isDark(row, col + 5)
						&& qrCode.isDark(row, col + 6)) {
						lostPoint += 40;
					}
				}
			}

			for (var col = 0; col < moduleCount; col++) {
				for (var row = 0; row < moduleCount - 6; row++) {
					if (qrCode.isDark(row, col)
						&& !qrCode.isDark(row + 1, col)
						&& qrCode.isDark(row + 2, col)
						&& qrCode.isDark(row + 3, col)
						&& qrCode.isDark(row + 4, col)
						&& !qrCode.isDark(row + 5, col)
						&& qrCode.isDark(row + 6, col)) {
						lostPoint += 40;
					}
				}
			}

			// LEVEL4

			var darkCount = 0;

			for (var col = 0; col < moduleCount; col++) {
				for (var row = 0; row < moduleCount; row++) {
					if (qrCode.isDark(row, col)) {
						darkCount++;
					}
				}
			}

			var ratio = Math.abs(100 * darkCount / moduleCount / moduleCount - 50) / 5;
			lostPoint += ratio * 10;

			return lostPoint;
		}

	};


	//---------------------------------------------------------------------
	// QRMath
	//---------------------------------------------------------------------

	QRCode.Math = {

		glog: function (n) {

			if (n < 1) {
				throw new Error("glog(" + n + ")");
			}

			return QRCode.Math.LOG_TABLE[n];
		},

		gexp: function (n) {

			while (n < 0) {
				n += 255;
			}

			while (n >= 256) {
				n -= 255;
			}

			return QRCode.Math.EXP_TABLE[n];
		},

		EXP_TABLE: new Array(256),

		LOG_TABLE: new Array(256)

	};

	for (var i = 0; i < 8; i++) {
		QRCode.Math.EXP_TABLE[i] = 1 << i;
	}
	for (var i = 8; i < 256; i++) {
		QRCode.Math.EXP_TABLE[i] = QRCode.Math.EXP_TABLE[i - 4]
		^ QRCode.Math.EXP_TABLE[i - 5]
		^ QRCode.Math.EXP_TABLE[i - 6]
		^ QRCode.Math.EXP_TABLE[i - 8];
	}
	for (var i = 0; i < 255; i++) {
		QRCode.Math.LOG_TABLE[QRCode.Math.EXP_TABLE[i]] = i;
	}

	//---------------------------------------------------------------------
	// QRPolynomial
	//---------------------------------------------------------------------

	QRCode.Polynomial = function (num, shift) {

		if (num.length == undefined) {
			throw new Error(num.length + "/" + shift);
		}

		var offset = 0;

		while (offset < num.length && num[offset] == 0) {
			offset++;
		}

		this.num = new Array(num.length - offset + shift);
		for (var i = 0; i < num.length - offset; i++) {
			this.num[i] = num[i + offset];
		}
	}

	QRCode.Polynomial.prototype = {

		get: function (index) {
			return this.num[index];
		},

		getLength: function () {
			return this.num.length;
		},

		multiply: function (e) {

			var num = new Array(this.getLength() + e.getLength() - 1);

			for (var i = 0; i < this.getLength(); i++) {
				for (var j = 0; j < e.getLength(); j++) {
					num[i + j] ^= QRCode.Math.gexp(QRCode.Math.glog(this.get(i)) + QRCode.Math.glog(e.get(j)));
				}
			}

			return new QRCode.Polynomial(num, 0);
		},

		mod: function (e) {

			if (this.getLength() - e.getLength() < 0) {
				return this;
			}

			var ratio = QRCode.Math.glog(this.get(0)) - QRCode.Math.glog(e.get(0));

			var num = new Array(this.getLength());

			for (var i = 0; i < this.getLength(); i++) {
				num[i] = this.get(i);
			}

			for (var i = 0; i < e.getLength(); i++) {
				num[i] ^= QRCode.Math.gexp(QRCode.Math.glog(e.get(i)) + ratio);
			}

			// recursive call
			return new QRCode.Polynomial(num, 0).mod(e);
		}
	};

	//---------------------------------------------------------------------
	// QRRSBlock
	//---------------------------------------------------------------------

	QRCode.RSBlock = function (totalCount, dataCount) {
		this.totalCount = totalCount;
		this.dataCount = dataCount;
	}

	QRCode.RSBlock.RS_BLOCK_TABLE = [

	// L
	// M
	// Q
	// H

	// 1
	[1, 26, 19],
	[1, 26, 16],
	[1, 26, 13],
	[1, 26, 9],

	// 2
	[1, 44, 34],
	[1, 44, 28],
	[1, 44, 22],
	[1, 44, 16],

	// 3
	[1, 70, 55],
	[1, 70, 44],
	[2, 35, 17],
	[2, 35, 13],

	// 4		
	[1, 100, 80],
	[2, 50, 32],
	[2, 50, 24],
	[4, 25, 9],

	// 5
	[1, 134, 108],
	[2, 67, 43],
	[2, 33, 15, 2, 34, 16],
	[2, 33, 11, 2, 34, 12],

	// 6
	[2, 86, 68],
	[4, 43, 27],
	[4, 43, 19],
	[4, 43, 15],

	// 7		
	[2, 98, 78],
	[4, 49, 31],
	[2, 32, 14, 4, 33, 15],
	[4, 39, 13, 1, 40, 14],

	// 8
	[2, 121, 97],
	[2, 60, 38, 2, 61, 39],
	[4, 40, 18, 2, 41, 19],
	[4, 40, 14, 2, 41, 15],

	// 9
	[2, 146, 116],
	[3, 58, 36, 2, 59, 37],
	[4, 36, 16, 4, 37, 17],
	[4, 36, 12, 4, 37, 13],

	// 10		
	[2, 86, 68, 2, 87, 69],
	[4, 69, 43, 1, 70, 44],
	[6, 43, 19, 2, 44, 20],
	[6, 43, 15, 2, 44, 16]

];

	QRCode.RSBlock.getRSBlocks = function (typeNumber, errorCorrectLevel) {

		var rsBlock = QRCode.RSBlock.getRsBlockTable(typeNumber, errorCorrectLevel);

		if (rsBlock == undefined) {
			throw new Error("bad rs block @ typeNumber:" + typeNumber + "/errorCorrectLevel:" + errorCorrectLevel);
		}

		var length = rsBlock.length / 3;

		var list = new Array();

		for (var i = 0; i < length; i++) {

			var count = rsBlock[i * 3 + 0];
			var totalCount = rsBlock[i * 3 + 1];
			var dataCount = rsBlock[i * 3 + 2];

			for (var j = 0; j < count; j++) {
				list.push(new QRCode.RSBlock(totalCount, dataCount));
			}
		}

		return list;
	};

	QRCode.RSBlock.getRsBlockTable = function (typeNumber, errorCorrectLevel) {

		switch (errorCorrectLevel) {
			case QRCode.ErrorCorrectLevel.L:
				return QRCode.RSBlock.RS_BLOCK_TABLE[(typeNumber - 1) * 4 + 0];
			case QRCode.ErrorCorrectLevel.M:
				return QRCode.RSBlock.RS_BLOCK_TABLE[(typeNumber - 1) * 4 + 1];
			case QRCode.ErrorCorrectLevel.Q:
				return QRCode.RSBlock.RS_BLOCK_TABLE[(typeNumber - 1) * 4 + 2];
			case QRCode.ErrorCorrectLevel.H:
				return QRCode.RSBlock.RS_BLOCK_TABLE[(typeNumber - 1) * 4 + 3];
			default:
				return undefined;
		}
	};

	//---------------------------------------------------------------------
	// QRBitBuffer
	//---------------------------------------------------------------------

	QRCode.BitBuffer = function () {
		this.buffer = new Array();
		this.length = 0;
	}

	QRCode.BitBuffer.prototype = {

		get: function (index) {
			var bufIndex = Math.floor(index / 8);
			return ((this.buffer[bufIndex] >>> (7 - index % 8)) & 1) == 1;
		},

		put: function (num, length) {
			for (var i = 0; i < length; i++) {
				this.putBit(((num >>> (length - i - 1)) & 1) == 1);
			}
		},

		getLengthInBits: function () {
			return this.length;
		},

		putBit: function (bit) {

			var bufIndex = Math.floor(this.length / 8);
			if (this.buffer.length <= bufIndex) {
				this.buffer.push(0);
			}

			if (bit) {
				this.buffer[bufIndex] |= (0x80 >>> (this.length % 8));
			}

			this.length++;
		}
	};
})();
	</script>
	<script type="text/javascript">
/*
Copyright (c) 2011 Stefan Thomas

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

//https://raw.github.com/bitcoinjs/bitcoinjs-lib/1a7fc9d063f864058809d06ef4542af40be3558f/src/bitcoin.js
(function (exports) {
	var Bitcoin = exports;
})(
	'object' === typeof module ? module.exports : (window.Bitcoin = {})
);
	</script>
	<script type="text/javascript">
//https://raw.github.com/bitcoinjs/bitcoinjs-lib/c952aaeb3ee472e3776655b8ea07299ebed702c7/src/base58.js
(function (Bitcoin) {
	Bitcoin.Base58 = {
		alphabet: "123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz",
		validRegex: /^[1-9A-HJ-NP-Za-km-z]+$/,
		base: BigInteger.valueOf(58),

		/**
		* Convert a byte array to a base58-encoded string.
		*
		* Written by Mike Hearn for BitcoinJ.
		*   Copyright (c) 2011 Google Inc.
		*
		* Ported to JavaScript by Stefan Thomas.
		*/
		encode: function (input) {
			var bi = BigInteger.fromByteArrayUnsigned(input);
			var chars = [];

			while (bi.compareTo(B58.base) >= 0) {
				var mod = bi.mod(B58.base);
				chars.unshift(B58.alphabet[mod.intValue()]);
				bi = bi.subtract(mod).divide(B58.base);
			}
			chars.unshift(B58.alphabet[bi.intValue()]);

			// Convert leading zeros too.
			for (var i = 0; i < input.length; i++) {
				if (input[i] == 0x00) {
					chars.unshift(B58.alphabet[0]);
				} else break;
			}

			return chars.join('');
		},

		/**
		* Convert a base58-encoded string to a byte array.
		*
		* Written by Mike Hearn for BitcoinJ.
		*   Copyright (c) 2011 Google Inc.
		*
		* Ported to JavaScript by Stefan Thomas.
		*/
		decode: function (input) {
			var bi = BigInteger.valueOf(0);
			var leadingZerosNum = 0;
			for (var i = input.length - 1; i >= 0; i--) {
				var alphaIndex = B58.alphabet.indexOf(input[i]);
				if (alphaIndex < 0) {
					throw "Invalid character";
				}
				bi = bi.add(BigInteger.valueOf(alphaIndex)
								.multiply(B58.base.pow(input.length - 1 - i)));

				// This counts leading zero bytes
				if (input[i] == "1") leadingZerosNum++;
				else leadingZerosNum = 0;
			}
			var bytes = bi.toByteArrayUnsigned();

			// Add leading zeros
			while (leadingZerosNum-- > 0) bytes.unshift(0);

			return bytes;
		}
	};

	var B58 = Bitcoin.Base58;
})(
	'undefined' != typeof Bitcoin ? Bitcoin : module.exports
);
	</script>
	<script type="text/javascript">
//https://raw.github.com/bitcoinjs/bitcoinjs-lib/09e8c6e184d6501a0c2c59d73ca64db5c0d3eb95/src/address.js
Bitcoin.Address = function (bytes) {
	if ("string" == typeof bytes) {
		bytes = Bitcoin.Address.decodeString(bytes);
	}
	this.hash = bytes;
	this.version = Bitcoin.Address.networkVersion;
};

Bitcoin.Address.networkVersion = 0x00; // mainnet

/**
* Serialize this object as a standard Bitcoin address.
*
* Returns the address as a base58-encoded string in the standardized format.
*/
Bitcoin.Address.prototype.toString = function () {
	// Get a copy of the hash
	var hash = this.hash.slice(0);

	// Version
	hash.unshift(this.version);
	var checksum = Crypto.SHA256(Crypto.SHA256(hash, { asBytes: true }), { asBytes: true });
	var bytes = hash.concat(checksum.slice(0, 4));
	return Bitcoin.Base58.encode(bytes);
};

Bitcoin.Address.prototype.getHashBase64 = function () {
	return Crypto.util.bytesToBase64(this.hash);
};

/**
* Parse a Bitcoin address contained in a string.
*/
Bitcoin.Address.decodeString = function (string) {
	var bytes = Bitcoin.Base58.decode(string);
	var hash = bytes.slice(0, 21);
	var checksum = Crypto.SHA256(Crypto.SHA256(hash, { asBytes: true }), { asBytes: true });

	if (checksum[0] != bytes[21] ||
			checksum[1] != bytes[22] ||
			checksum[2] != bytes[23] ||
			checksum[3] != bytes[24]) {
		throw "Checksum validation failed!";
	}

	var version = hash.shift();

	if (version != 0) {
		throw "Version " + version + " not supported!";
	}

	return hash;
};
	</script>
	<script type="text/javascript">
//https://raw.github.com/bitcoinjs/bitcoinjs-lib/e90780d3d3b8fc0d027d2bcb38b80479902f223e/src/ecdsa.js
Bitcoin.ECDSA = (function () {
	var ecparams = EllipticCurve.getSECCurveByName("secp256k1");
	var rng = new SecureRandom();

	var P_OVER_FOUR = null;

	function implShamirsTrick(P, k, Q, l) {
		var m = Math.max(k.bitLength(), l.bitLength());
		var Z = P.add2D(Q);
		var R = P.curve.getInfinity();

		for (var i = m - 1; i >= 0; --i) {
			R = R.twice2D();

			R.z = BigInteger.ONE;

			if (k.testBit(i)) {
				if (l.testBit(i)) {
					R = R.add2D(Z);
				} else {
					R = R.add2D(P);
				}
			} else {
				if (l.testBit(i)) {
					R = R.add2D(Q);
				}
			}
		}

		return R;
	};

	var ECDSA = {
		getBigRandom: function (limit) {
			return new BigInteger(limit.bitLength(), rng)
				.mod(limit.subtract(BigInteger.ONE))
				.add(BigInteger.ONE);
		},
		sign: function (hash, priv) {
			var d = priv;
			var n = ecparams.getN();
			var e = BigInteger.fromByteArrayUnsigned(hash);

			do {
				var k = ECDSA.getBigRandom(n);
				var G = ecparams.getG();
				var Q = G.multiply(k);
				var r = Q.getX().toBigInteger().mod(n);
			} while (r.compareTo(BigInteger.ZERO) <= 0);

			var s = k.modInverse(n).multiply(e.add(d.multiply(r))).mod(n);

			return ECDSA.serializeSig(r, s);
		},

		verify: function (hash, sig, pubkey) {
			var r, s;
			if (Bitcoin.Util.isArray(sig)) {
				var obj = ECDSA.parseSig(sig);
				r = obj.r;
				s = obj.s;
			} else if ("object" === typeof sig && sig.r && sig.s) {
				r = sig.r;
				s = sig.s;
			} else {
				throw "Invalid value for signature";
			}

			var Q;
			if (pubkey instanceof ec.PointFp) {
				Q = pubkey;
			} else if (Bitcoin.Util.isArray(pubkey)) {
				Q = EllipticCurve.PointFp.decodeFrom(ecparams.getCurve(), pubkey);
			} else {
				throw "Invalid format for pubkey value, must be byte array or ec.PointFp";
			}
			var e = BigInteger.fromByteArrayUnsigned(hash);

			return ECDSA.verifyRaw(e, r, s, Q);
		},

		verifyRaw: function (e, r, s, Q) {
			var n = ecparams.getN();
			var G = ecparams.getG();

			if (r.compareTo(BigInteger.ONE) < 0 ||
          r.compareTo(n) >= 0)
				return false;

			if (s.compareTo(BigInteger.ONE) < 0 ||
          s.compareTo(n) >= 0)
				return false;

			var c = s.modInverse(n);

			var u1 = e.multiply(c).mod(n);
			var u2 = r.multiply(c).mod(n);

			// TODO(!!!): For some reason Shamir's trick isn't working with
			// signed message verification!? Probably an implementation
			// error!
			//var point = implShamirsTrick(G, u1, Q, u2);
			var point = G.multiply(u1).add(Q.multiply(u2));

			var v = point.getX().toBigInteger().mod(n);

			return v.equals(r);
		},

		/**
		* Serialize a signature into DER format.
		*
		* Takes two BigIntegers representing r and s and returns a byte array.
		*/
		serializeSig: function (r, s) {
			var rBa = r.toByteArraySigned();
			var sBa = s.toByteArraySigned();

			var sequence = [];
			sequence.push(0x02); // INTEGER
			sequence.push(rBa.length);
			sequence = sequence.concat(rBa);

			sequence.push(0x02); // INTEGER
			sequence.push(sBa.length);
			sequence = sequence.concat(sBa);

			sequence.unshift(sequence.length);
			sequence.unshift(0x30); // SEQUENCE

			return sequence;
		},

		/**
		* Parses a byte array containing a DER-encoded signature.
		*
		* This function will return an object of the form:
		* 
		* {
		*   r: BigInteger,
		*   s: BigInteger
		* }
		*/
		parseSig: function (sig) {
			var cursor;
			if (sig[0] != 0x30)
				throw new Error("Signature not a valid DERSequence");

			cursor = 2;
			if (sig[cursor] != 0x02)
				throw new Error("First element in signature must be a DERInteger"); ;
			var rBa = sig.slice(cursor + 2, cursor + 2 + sig[cursor + 1]);

			cursor += 2 + sig[cursor + 1];
			if (sig[cursor] != 0x02)
				throw new Error("Second element in signature must be a DERInteger");
			var sBa = sig.slice(cursor + 2, cursor + 2 + sig[cursor + 1]);

			cursor += 2 + sig[cursor + 1];

			//if (cursor != sig.length)
			//	throw new Error("Extra bytes in signature");

			var r = BigInteger.fromByteArrayUnsigned(rBa);
			var s = BigInteger.fromByteArrayUnsigned(sBa);

			return { r: r, s: s };
		},

		parseSigCompact: function (sig) {
			if (sig.length !== 65) {
				throw "Signature has the wrong length";
			}

			// Signature is prefixed with a type byte storing three bits of
			// information.
			var i = sig[0] - 27;
			if (i < 0 || i > 7) {
				throw "Invalid signature type";
			}

			var n = ecparams.getN();
			var r = BigInteger.fromByteArrayUnsigned(sig.slice(1, 33)).mod(n);
			var s = BigInteger.fromByteArrayUnsigned(sig.slice(33, 65)).mod(n);

			return { r: r, s: s, i: i };
		},

		/**
		* Recover a public key from a signature.
		*
		* See SEC 1: Elliptic Curve Cryptography, section 4.1.6, "Public
		* Key Recovery Operation".
		*
		* http://www.secg.org/download/aid-780/sec1-v2.pdf
		*/
		recoverPubKey: function (r, s, hash, i) {
			// The recovery parameter i has two bits.
			i = i & 3;

			// The less significant bit specifies whether the y coordinate
			// of the compressed point is even or not.
			var isYEven = i & 1;

			// The more significant bit specifies whether we should use the
			// first or second candidate key.
			var isSecondKey = i >> 1;

			var n = ecparams.getN();
			var G = ecparams.getG();
			var curve = ecparams.getCurve();
			var p = curve.getQ();
			var a = curve.getA().toBigInteger();
			var b = curve.getB().toBigInteger();

			// We precalculate (p + 1) / 4 where p is if the field order
			if (!P_OVER_FOUR) {
				P_OVER_FOUR = p.add(BigInteger.ONE).divide(BigInteger.valueOf(4));
			}

			// 1.1 Compute x
			var x = isSecondKey ? r.add(n) : r;

			// 1.3 Convert x to point
			var alpha = x.multiply(x).multiply(x).add(a.multiply(x)).add(b).mod(p);
			var beta = alpha.modPow(P_OVER_FOUR, p);

			var xorOdd = beta.isEven() ? (i % 2) : ((i + 1) % 2);
			// If beta is even, but y isn't or vice versa, then convert it,
			// otherwise we're done and y == beta.
			var y = (beta.isEven() ? !isYEven : isYEven) ? beta : p.subtract(beta);

			// 1.4 Check that nR is at infinity
			var R = new EllipticCurve.PointFp(curve,
                            curve.fromBigInteger(x),
                            curve.fromBigInteger(y));
			R.validate();

			// 1.5 Compute e from M
			var e = BigInteger.fromByteArrayUnsigned(hash);
			var eNeg = BigInteger.ZERO.subtract(e).mod(n);

			// 1.6 Compute Q = r^-1 (sR - eG)
			var rInv = r.modInverse(n);
			var Q = implShamirsTrick(R, s, G, eNeg).multiply(rInv);

			Q.validate();
			if (!ECDSA.verifyRaw(e, r, s, Q)) {
				throw "Pubkey recovery unsuccessful";
			}

			var pubKey = new Bitcoin.ECKey();
			pubKey.pub = Q;
			return pubKey;
		},

		/**
		* Calculate pubkey extraction parameter.
		*
		* When extracting a pubkey from a signature, we have to
		* distinguish four different cases. Rather than putting this
		* burden on the verifier, Bitcoin includes a 2-bit value with the
		* signature.
		*
		* This function simply tries all four cases and returns the value
		* that resulted in a successful pubkey recovery.
		*/
		calcPubkeyRecoveryParam: function (address, r, s, hash) {
			for (var i = 0; i < 4; i++) {
				try {
					var pubkey = Bitcoin.ECDSA.recoverPubKey(r, s, hash, i);
					if (pubkey.getBitcoinAddress().toString() == address) {
						return i;
					}
				} catch (e) { }
			}
			throw "Unable to find valid recovery factor";
		}
	};

	return ECDSA;
})();
	</script>
	<script type="text/javascript">
//https://raw.github.com/pointbiz/bitcoinjs-lib/9b2f94a028a7bc9bed94e0722563e9ff1d8e8db8/src/eckey.js
Bitcoin.ECKey = (function () {
	var ECDSA = Bitcoin.ECDSA;
	var ecparams = EllipticCurve.getSECCurveByName("secp256k1");
	var rng = new SecureRandom();

	var ECKey = function (input) {
		if (!input) {
			// Generate new key
			var n = ecparams.getN();
			this.priv = ECDSA.getBigRandom(n);
		} else if (input instanceof BigInteger) {
			// Input is a private key value
			this.priv = input;
		} else if (Bitcoin.Util.isArray(input)) {
			// Prepend zero byte to prevent interpretation as negative integer
			this.priv = BigInteger.fromByteArrayUnsigned(input);
		} else if ("string" == typeof input) {
			var bytes = null;
			if (ECKey.isWalletImportFormat(input)) {
				bytes = ECKey.decodeWalletImportFormat(input);
			} else if (ECKey.isCompressedWalletImportFormat(input)) {
				bytes = ECKey.decodeCompressedWalletImportFormat(input);
				this.compressed = true;
			} else if (ECKey.isMiniFormat(input)) {
				bytes = Crypto.SHA256(input, { asBytes: true });
			} else if (ECKey.isHexFormat(input)) {
				bytes = Crypto.util.hexToBytes(input);
			} else if (ECKey.isBase64Format(input)) {
				bytes = Crypto.util.base64ToBytes(input);
			}
			
			if (ECKey.isBase6Format(input)) {
				this.priv = new BigInteger(input, 6);
			} else if (bytes == null || bytes.length != 32) {
				this.priv = null;
			} else {
				// Prepend zero byte to prevent interpretation as negative integer
				this.priv = BigInteger.fromByteArrayUnsigned(bytes);
			}
		}

		this.compressed = (this.compressed == undefined) ? !!ECKey.compressByDefault : this.compressed;
	};

	ECKey.privateKeyPrefix = 0x80; // mainnet 0x80    testnet 0xEF

	/**
	* Whether public keys should be returned compressed by default.
	*/
	ECKey.compressByDefault = false;

	/**
	* Set whether the public key should be returned compressed or not.
	*/
	ECKey.prototype.setCompressed = function (v) {
		this.compressed = !!v;
		if (this.pubPoint) this.pubPoint.compressed = this.compressed;
		return this;
	};

	/*
	* Return public key as a byte array in DER encoding
	*/
	ECKey.prototype.getPub = function () {
		if (this.compressed) {
			if (this.pubComp) return this.pubComp;
			return this.pubComp = this.getPubPoint().getEncoded(1);
		} else {
			if (this.pubUncomp) return this.pubUncomp;
			return this.pubUncomp = this.getPubPoint().getEncoded(0);
		}
	};

	/**
	* Return public point as ECPoint object.
	*/
	ECKey.prototype.getPubPoint = function () {
		if (!this.pubPoint) {
			this.pubPoint = ecparams.getG().multiply(this.priv);
			this.pubPoint.compressed = this.compressed;
		}
		return this.pubPoint;
	};

	ECKey.prototype.getPubKeyHex = function () {
		if (this.compressed) {
			if (this.pubKeyHexComp) return this.pubKeyHexComp;
			return this.pubKeyHexComp = Crypto.util.bytesToHex(this.getPub()).toString().toUpperCase();
		} else {
			if (this.pubKeyHexUncomp) return this.pubKeyHexUncomp;
			return this.pubKeyHexUncomp = Crypto.util.bytesToHex(this.getPub()).toString().toUpperCase();
		}
	};

	/**
	* Get the pubKeyHash for this key.
	*
	* This is calculated as RIPE160(SHA256([encoded pubkey])) and returned as
	* a byte array.
	*/
	ECKey.prototype.getPubKeyHash = function () {
		if (this.compressed) {
			if (this.pubKeyHashComp) return this.pubKeyHashComp;
			return this.pubKeyHashComp = Bitcoin.Util.sha256ripe160(this.getPub());
		} else {
			if (this.pubKeyHashUncomp) return this.pubKeyHashUncomp;
			return this.pubKeyHashUncomp = Bitcoin.Util.sha256ripe160(this.getPub());
		}
	};

	ECKey.prototype.getBitcoinAddress = function () {
		var hash = this.getPubKeyHash();
		var addr = new Bitcoin.Address(hash);
		return addr.toString();
	};

	/*
	* Takes a public point as a hex string or byte array
	*/
	ECKey.prototype.setPub = function (pub) {
		// byte array
		if (Bitcoin.Util.isArray(pub)) {
			pub = Crypto.util.bytesToHex(pub).toString().toUpperCase();
		}
		var ecPoint = ecparams.getCurve().decodePointHex(pub);
		this.setCompressed(ecPoint.compressed);
		this.pubPoint = ecPoint;
		return this;
	};

	// Sipa Private Key Wallet Import Format 
	ECKey.prototype.getBitcoinWalletImportFormat = function () {
		var bytes = this.getBitcoinPrivateKeyByteArray();
		bytes.unshift(ECKey.privateKeyPrefix); // prepend 0x80 byte
		if (this.compressed) bytes.push(0x01); // append 0x01 byte for compressed format
		var checksum = Crypto.SHA256(Crypto.SHA256(bytes, { asBytes: true }), { asBytes: true });
		bytes = bytes.concat(checksum.slice(0, 4));
		var privWif = Bitcoin.Base58.encode(bytes);
		return privWif;
	};

	// Private Key Hex Format 
	ECKey.prototype.getBitcoinHexFormat = function () {
		return Crypto.util.bytesToHex(this.getBitcoinPrivateKeyByteArray()).toString().toUpperCase();
	};

	// Private Key Base64 Format 
	ECKey.prototype.getBitcoinBase64Format = function () {
		return Crypto.util.bytesToBase64(this.getBitcoinPrivateKeyByteArray());
	};

	ECKey.prototype.getBitcoinPrivateKeyByteArray = function () {
		// Get a copy of private key as a byte array
		var bytes = this.priv.toByteArrayUnsigned();
		// zero pad if private key is less than 32 bytes 
		while (bytes.length < 32) bytes.unshift(0x00);
		return bytes;
	};

	ECKey.prototype.toString = function (format) {
		format = format || "";
		if (format.toString().toLowerCase() == "base64" || format.toString().toLowerCase() == "b64") {
			return this.getBitcoinBase64Format();
		}
		// Wallet Import Format
		else if (format.toString().toLowerCase() == "wif") {
			return this.getBitcoinWalletImportFormat();
		}
		else {
			return this.getBitcoinHexFormat();
		}
	};

	ECKey.prototype.sign = function (hash) {
		return ECDSA.sign(hash, this.priv);
	};

	ECKey.prototype.verify = function (hash, sig) {
		return ECDSA.verify(hash, sig, this.getPub());
	};

	/**
	* Parse a wallet import format private key contained in a string.
	*/
	ECKey.decodeWalletImportFormat = function (privStr) {
		var bytes = Bitcoin.Base58.decode(privStr);
		var hash = bytes.slice(0, 33);
		var checksum = Crypto.SHA256(Crypto.SHA256(hash, { asBytes: true }), { asBytes: true });
		if (checksum[0] != bytes[33] ||
					checksum[1] != bytes[34] ||
					checksum[2] != bytes[35] ||
					checksum[3] != bytes[36]) {
			throw "Checksum validation failed!";
		}
		var version = hash.shift();
		if (version != ECKey.privateKeyPrefix) {
			throw "Version " + version + " not supported!";
		}
		return hash;
	};

	/**
	* Parse a compressed wallet import format private key contained in a string.
	*/
	ECKey.decodeCompressedWalletImportFormat = function (privStr) {
		var bytes = Bitcoin.Base58.decode(privStr);
		var hash = bytes.slice(0, 34);
		var checksum = Crypto.SHA256(Crypto.SHA256(hash, { asBytes: true }), { asBytes: true });
		if (checksum[0] != bytes[34] ||
					checksum[1] != bytes[35] ||
					checksum[2] != bytes[36] ||
					checksum[3] != bytes[37]) {
			throw "Checksum validation failed!";
		}
		var version = hash.shift();
		if (version != ECKey.privateKeyPrefix) {
			throw "Version " + version + " not supported!";
		}
		hash.pop();
		return hash;
	};

	// 64 characters [0-9A-F]
	ECKey.isHexFormat = function (key) {
		key = key.toString();
		return /^[A-Fa-f0-9]{64}$/.test(key);
	};

	// 51 characters base58, always starts with a '5'
	ECKey.isWalletImportFormat = function (key) {
		key = key.toString();
		return (ECKey.privateKeyPrefix == 0x80) ?
							(/^5[123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz]{50}$/.test(key)) :
							(/^9[123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz]{50}$/.test(key));
	};

	// 52 characters base58
	ECKey.isCompressedWalletImportFormat = function (key) {
		key = key.toString();
		return (ECKey.privateKeyPrefix == 0x80) ?
							(/^[LK][123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz]{51}$/.test(key)) :
							(/^c[123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz]{51}$/.test(key));
	};

	// 44 characters
	ECKey.isBase64Format = function (key) {
		key = key.toString();
		return (/^[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789=+\/]{44}$/.test(key));
	};

	// 99 characters, 1=1, if using dice convert 6 to 0
	ECKey.isBase6Format = function (key) {
		key = key.toString();
		return (/^[012345]{99}$/.test(key));
	};

	// 22, 26 or 30 characters, always starts with an 'S'
	ECKey.isMiniFormat = function (key) {
		key = key.toString();
		var validChars22 = /^S[123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz]{21}$/.test(key);
		var validChars26 = /^S[123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz]{25}$/.test(key);
		var validChars30 = /^S[123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz]{29}$/.test(key);
		var testBytes = Crypto.SHA256(key + "?", { asBytes: true });

		return ((testBytes[0] === 0x00 || testBytes[0] === 0x01) && (validChars22 || validChars26 || validChars30));
	};

	return ECKey;
})();
	</script>
	<script type="text/javascript">
//https://raw.github.com/bitcoinjs/bitcoinjs-lib/09e8c6e184d6501a0c2c59d73ca64db5c0d3eb95/src/util.js
// Bitcoin utility functions
Bitcoin.Util = {
	/**
	* Cross-browser compatibility version of Array.isArray.
	*/
	isArray: Array.isArray || function (o) {
		return Object.prototype.toString.call(o) === '[object Array]';
	},
	/**
	* Create an array of a certain length filled with a specific value.
	*/
	makeFilledArray: function (len, val) {
		var array = [];
		var i = 0;
		while (i < len) {
			array[i++] = val;
		}
		return array;
	},
	/**
	* Turn an integer into a "var_int".
	*
	* "var_int" is a variable length integer used by Bitcoin's binary format.
	*
	* Returns a byte array.
	*/
	numToVarInt: function (i) {
		if (i < 0xfd) {
			// unsigned char
			return [i];
		} else if (i <= 1 << 16) {
			// unsigned short (LE)
			return [0xfd, i >>> 8, i & 255];
		} else if (i <= 1 << 32) {
			// unsigned int (LE)
			return [0xfe].concat(Crypto.util.wordsToBytes([i]));
		} else {
			// unsigned long long (LE)
			return [0xff].concat(Crypto.util.wordsToBytes([i >>> 32, i]));
		}
	},
	/**
	* Parse a Bitcoin value byte array, returning a BigInteger.
	*/
	valueToBigInt: function (valueBuffer) {
		if (valueBuffer instanceof BigInteger) return valueBuffer;

		// Prepend zero byte to prevent interpretation as negative integer
		return BigInteger.fromByteArrayUnsigned(valueBuffer);
	},
	/**
	* Format a Bitcoin value as a string.
	*
	* Takes a BigInteger or byte-array and returns that amount of Bitcoins in a
	* nice standard formatting.
	*
	* Examples:
	* 12.3555
	* 0.1234
	* 900.99998888
	* 34.00
	*/
	formatValue: function (valueBuffer) {
		var value = this.valueToBigInt(valueBuffer).toString();
		var integerPart = value.length > 8 ? value.substr(0, value.length - 8) : '0';
		var decimalPart = value.length > 8 ? value.substr(value.length - 8) : value;
		while (decimalPart.length < 8) decimalPart = "0" + decimalPart;
		decimalPart = decimalPart.replace(/0*$/, '');
		while (decimalPart.length < 2) decimalPart += "0";
		return integerPart + "." + decimalPart;
	},
	/**
	* Parse a floating point string as a Bitcoin value.
	*
	* Keep in mind that parsing user input is messy. You should always display
	* the parsed value back to the user to make sure we understood his input
	* correctly.
	*/
	parseValue: function (valueString) {
		// TODO: Detect other number formats (e.g. comma as decimal separator)
		var valueComp = valueString.split('.');
		var integralPart = valueComp[0];
		var fractionalPart = valueComp[1] || "0";
		while (fractionalPart.length < 8) fractionalPart += "0";
		fractionalPart = fractionalPart.replace(/^0+/g, '');
		var value = BigInteger.valueOf(parseInt(integralPart));
		value = value.multiply(BigInteger.valueOf(100000000));
		value = value.add(BigInteger.valueOf(parseInt(fractionalPart)));
		return value;
	},
	/**
	* Calculate RIPEMD160(SHA256(data)).
	*
	* Takes an arbitrary byte array as inputs and returns the hash as a byte
	* array.
	*/
	sha256ripe160: function (data) {
		return Crypto.RIPEMD160(Crypto.SHA256(data, { asBytes: true }), { asBytes: true });
	},
	// double sha256
	dsha256: function (data) {
		return Crypto.SHA256(Crypto.SHA256(data, { asBytes: true }), { asBytes: true });
	}
};
	</script>
	<script type="text/javascript">
/*
* Copyright (c) 2010-2011 Intalio Pte, All Rights Reserved
* 
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
* 
* The above copyright notice and this permission notice shall be included in
* all copies or substantial portions of the Software.
* 
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
* THE SOFTWARE.
*/
// https://github.com/cheongwy/node-scrypt-js
(function () {

	var MAX_VALUE = 2147483647;
	var workerUrl = null;

	//function scrypt(byte[] passwd, byte[] salt, int N, int r, int p, int dkLen)
	/*
	* N = Cpu cost
	* r = Memory cost
	* p = parallelization cost
	* 
	*/
	window.Crypto_scrypt = function (passwd, salt, N, r, p, dkLen, callback) {
		if (N == 0 || (N & (N - 1)) != 0) throw Error("N must be > 0 and a power of 2");

		if (N > MAX_VALUE / 128 / r) throw Error("Parameter N is too large");
		if (r > MAX_VALUE / 128 / p) throw Error("Parameter r is too large");

		var PBKDF2_opts = { iterations: 1, hasher: Crypto.SHA256, asBytes: true };

		var B = Crypto.PBKDF2(passwd, salt, p * 128 * r, PBKDF2_opts);

		try {
			var i = 0;
			var worksDone = 0;
			var makeWorker = function () {
				if (!workerUrl) {
					var code = '(' + scryptCore.toString() + ')()';
					var blob;
					try {
						blob = new Blob([code], { type: "text/javascript" });
					} catch (e) {
						window.BlobBuilder = window.BlobBuilder || window.WebKitBlobBuilder || window.MozBlobBuilder || window.MSBlobBuilder;
						blob = new BlobBuilder();
						blob.append(code);
						blob = blob.getBlob("text/javascript");
					}
					workerUrl = URL.createObjectURL(blob);
				}
				var worker = new Worker(workerUrl);
				worker.onmessage = function (event) {
					var Bi = event.data[0], Bslice = event.data[1];
					worksDone++;

					if (i < p) {
						worker.postMessage([N, r, p, B, i++]);
					}

					var length = Bslice.length, destPos = Bi * 128 * r, srcPos = 0;
					while (length--) {
						B[destPos++] = Bslice[srcPos++];
					}

					if (worksDone == p) {
						callback(Crypto.PBKDF2(passwd, B, dkLen, PBKDF2_opts));
					}
				};
				return worker;
			};
			var workers = [makeWorker(), makeWorker()];
			workers[0].postMessage([N, r, p, B, i++]);
			if (p > 1) {
				workers[1].postMessage([N, r, p, B, i++]);
			}
		} catch (e) {
			window.setTimeout(function () {
				scryptCore();
				callback(Crypto.PBKDF2(passwd, B, dkLen, PBKDF2_opts));
			}, 0);
		}

		// using this function to enclose everything needed to create a worker (but also invokable directly for synchronous use)
		function scryptCore() {
			var XY = [], V = [];

			if (typeof B === 'undefined') {
				onmessage = function (event) {
					var data = event.data;
					var N = data[0], r = data[1], p = data[2], B = data[3], i = data[4];

					var Bslice = [];
					arraycopy32(B, i * 128 * r, Bslice, 0, 128 * r);
					smix(Bslice, 0, r, N, V, XY);

					postMessage([i, Bslice]);
				};
			} else {
				for (var i = 0; i < p; i++) {
					smix(B, i * 128 * r, r, N, V, XY);
				}
			}

			function smix(B, Bi, r, N, V, XY) {
				var Xi = 0;
				var Yi = 128 * r;
				var i;

				arraycopy32(B, Bi, XY, Xi, Yi);

				for (i = 0; i < N; i++) {
					arraycopy32(XY, Xi, V, i * Yi, Yi);
					blockmix_salsa8(XY, Xi, Yi, r);
				}

				for (i = 0; i < N; i++) {
					var j = integerify(XY, Xi, r) & (N - 1);
					blockxor(V, j * Yi, XY, Xi, Yi);
					blockmix_salsa8(XY, Xi, Yi, r);
				}

				arraycopy32(XY, Xi, B, Bi, Yi);
			}

			function blockmix_salsa8(BY, Bi, Yi, r) {
				var X = [];
				var i;

				arraycopy32(BY, Bi + (2 * r - 1) * 64, X, 0, 64);

				for (i = 0; i < 2 * r; i++) {
					blockxor(BY, i * 64, X, 0, 64);
					salsa20_8(X);
					arraycopy32(X, 0, BY, Yi + (i * 64), 64);
				}

				for (i = 0; i < r; i++) {
					arraycopy32(BY, Yi + (i * 2) * 64, BY, Bi + (i * 64), 64);
				}

				for (i = 0; i < r; i++) {
					arraycopy32(BY, Yi + (i * 2 + 1) * 64, BY, Bi + (i + r) * 64, 64);
				}
			}

			function R(a, b) {
				return (a << b) | (a >>> (32 - b));
			}

			function salsa20_8(B) {
				var B32 = new Array(32);
				var x = new Array(32);
				var i;

				for (i = 0; i < 16; i++) {
					B32[i] = (B[i * 4 + 0] & 0xff) << 0;
					B32[i] |= (B[i * 4 + 1] & 0xff) << 8;
					B32[i] |= (B[i * 4 + 2] & 0xff) << 16;
					B32[i] |= (B[i * 4 + 3] & 0xff) << 24;
				}

				arraycopy(B32, 0, x, 0, 16);

				for (i = 8; i > 0; i -= 2) {
					x[4] ^= R(x[0] + x[12], 7); x[8] ^= R(x[4] + x[0], 9);
					x[12] ^= R(x[8] + x[4], 13); x[0] ^= R(x[12] + x[8], 18);
					x[9] ^= R(x[5] + x[1], 7); x[13] ^= R(x[9] + x[5], 9);
					x[1] ^= R(x[13] + x[9], 13); x[5] ^= R(x[1] + x[13], 18);
					x[14] ^= R(x[10] + x[6], 7); x[2] ^= R(x[14] + x[10], 9);
					x[6] ^= R(x[2] + x[14], 13); x[10] ^= R(x[6] + x[2], 18);
					x[3] ^= R(x[15] + x[11], 7); x[7] ^= R(x[3] + x[15], 9);
					x[11] ^= R(x[7] + x[3], 13); x[15] ^= R(x[11] + x[7], 18);
					x[1] ^= R(x[0] + x[3], 7); x[2] ^= R(x[1] + x[0], 9);
					x[3] ^= R(x[2] + x[1], 13); x[0] ^= R(x[3] + x[2], 18);
					x[6] ^= R(x[5] + x[4], 7); x[7] ^= R(x[6] + x[5], 9);
					x[4] ^= R(x[7] + x[6], 13); x[5] ^= R(x[4] + x[7], 18);
					x[11] ^= R(x[10] + x[9], 7); x[8] ^= R(x[11] + x[10], 9);
					x[9] ^= R(x[8] + x[11], 13); x[10] ^= R(x[9] + x[8], 18);
					x[12] ^= R(x[15] + x[14], 7); x[13] ^= R(x[12] + x[15], 9);
					x[14] ^= R(x[13] + x[12], 13); x[15] ^= R(x[14] + x[13], 18);
				}

				for (i = 0; i < 16; ++i) B32[i] = x[i] + B32[i];

				for (i = 0; i < 16; i++) {
					var bi = i * 4;
					B[bi + 0] = (B32[i] >> 0 & 0xff);
					B[bi + 1] = (B32[i] >> 8 & 0xff);
					B[bi + 2] = (B32[i] >> 16 & 0xff);
					B[bi + 3] = (B32[i] >> 24 & 0xff);
				}
			}

			function blockxor(S, Si, D, Di, len) {
				var i = len >> 6;
				while (i--) {
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];

					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];

					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];

					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];

					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];

					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];

					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];

					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
					D[Di++] ^= S[Si++]; D[Di++] ^= S[Si++];
				}
			}

			function integerify(B, bi, r) {
				var n;

				bi += (2 * r - 1) * 64;

				n = (B[bi + 0] & 0xff) << 0;
				n |= (B[bi + 1] & 0xff) << 8;
				n |= (B[bi + 2] & 0xff) << 16;
				n |= (B[bi + 3] & 0xff) << 24;

				return n;
			}

			function arraycopy(src, srcPos, dest, destPos, length) {
				while (length--) {
					dest[destPos++] = src[srcPos++];
				}
			}

			function arraycopy32(src, srcPos, dest, destPos, length) {
				var i = length >> 5;
				while (i--) {
					dest[destPos++] = src[srcPos++]; dest[destPos++] = src[srcPos++];
					dest[destPos++] = src[srcPos++]; dest[destPos++] = src[srcPos++];
					dest[destPos++] = src[srcPos++]; dest[destPos++] = src[srcPos++];
					dest[destPos++] = src[srcPos++]; dest[destPos++] = src[srcPos++];

					dest[destPos++] = src[srcPos++]; dest[destPos++] = src[srcPos++];
					dest[destPos++] = src[srcPos++]; dest[destPos++] = src[srcPos++];
					dest[destPos++] = src[srcPos++]; dest[destPos++] = src[srcPos++];
					dest[destPos++] = src[srcPos++]; dest[destPos++] = src[srcPos++];

					dest[destPos++] = src[srcPos++]; dest[destPos++] = src[srcPos++];
					dest[destPos++] = src[srcPos++]; dest[destPos++] = src[srcPos++];
					dest[destPos++] = src[srcPos++]; dest[destPos++] = src[srcPos++];
					dest[destPos++] = src[srcPos++]; dest[destPos++] = src[srcPos++];

					dest[destPos++] = src[srcPos++]; dest[destPos++] = src[srcPos++];
					dest[destPos++] = src[srcPos++]; dest[destPos++] = src[srcPos++];
					dest[destPos++] = src[srcPos++]; dest[destPos++] = src[srcPos++];
					dest[destPos++] = src[srcPos++]; dest[destPos++] = src[srcPos++];
				}
			}
		} // scryptCore
	}; // window.Crypto_scrypt
})();
	</script>
	<style type="text/css">
.more { background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNXG14zYAAAAWdEVYdENyZWF0aW9uIFRpbWUAMDEvMDIvMTLltnQyAAAB1UlEQVQ4jYWTS04bQRCGv3q0x8gMYJCwknCGLDgLVwiH4grhLFaUXdhkQ0A8pBg/FOLpnmbhMYzxRKlNS1Vdf/31V5XknGnb+eXJCBjzbzu9OLu+azu845Opysej4wHmshF4uJ2TUrb3CV0gIBAKRboC5C2vdkDE9fdty6/xDegvXz+NgDbFUejZ+PjDgExmtpxS9vYwMe5u5iyX8RRoa5Ic+C4qx9KUN1MGu4E618yqJ5axAp44KA7ZL3eYzp/HKdVIw7WK8d6BuDvcod9TQlBEIOXEdPlElSoUJabIIs4Z7h9yNDwgqOMayLXw7epHVIBggrsgspZPUBQyiCgugRQji7TAVDF1XB2TlQoOYCqovkmpopS9fcoiM3ue0rOCYf8IU8NklWxiiOQ3EPXtWagIqo6KYWYEc4IGvMViA6RrnCJKVS9B8ypRHG1YKNa0Ur+C+MPt/I2BKWVZUO4FgvQ47PcptEDF+T2Z8TiZUMWIyGtpd+Bze5VTSqP57O/4YG+AN/RXbSiPkwmL5z/be/L+mM4vT2JKeUW7EXD1erMz/Lo4u77f0K9DDhdA1XG11jh9vWBb99Z9gAg5QZ2hzpmUa0RSW4f/gqSY0s3Vz+tufEjvHS8Tg6BXC7qVbQAAAABJRU5ErkJggg==)
			no-repeat left center; width: 17px; height: 17px; display: inline-block; float: right; }
.less { background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAK6wAACusBgosNWgAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNXG14zYAAAAWdEVYdENyZWF0aW9uIFRpbWUAMDEvMDIvMTLltnQyAAABuklEQVQ4ja2US25TQRBFT336OSEY5ESyBfEakNiLt0AW5S2QvQQxAiZIYBwSz/yByH7dxcB2bPMME+hJS/W5fetWVUtE8K/HfzdcXfdfqsr4onuGuRz4Jrdzcg6Gg9HfQYAxAqmlSMMlQJO5/oliE4AtQLcR++btZQ+wPVsvVXbTfXFGEMyWU9rVM0yMu/Gc5bJ+DdztxWcH3otKVzbPmyq5LnwfzSgEBMxlhqJEBFWVKKUgG66rur53oH7aOeWkUlJSRCBHZracssorlLXttHpCpzonaYukjmsiivDu08daAZIJ7oLIVg9BUQgQUVwSua5Z5AWmiqnj6pisVXAAU0F1J6WK0q6e024Fs4cplbXonFxgapisk00MkdiBqDd7oSKoOiqGmZHMSZrwPRYHIMfaKaKsyhI01oni6IaFYptSyiOIT27nOwaq5FyQrUAIC/nBhK+UErRSos55z4878CrneJyTnHOvquymf3mOb+hvy/jw+QuLh5/NORkORvsGrq77dc6xpr0RcH07y3oF8G04GN0f6HdEDhdA1XG1vXb6dsAa+3Z8AREiQwkoEeQoiBzocHDkf/wnvwC5IpRVsUDNUgAAAABJRU5ErkJggg==)
			no-repeat left center; width: 17px; height: 17px; display: inline-block; float: right; }
a { position: relative; z-index: 20; }
.right { text-align: right; }
.walletarea { display: none; border: 2px solid rgb(4, 130, 230); }
hr { margin: 20px 0; border-top: 2px dashed #008000; }
.keyarea { height: 110px; text-align: left; position: relative; padding: 5px; }
.keyarea .public { float: left; }
.keyarea .pubaddress { display: inline-block; height: 40px; padding: 0 0 0 10px; float: left; }
.keyarea .privwif { margin: 0;  float: right; text-align: right; padding: 0 20px 0 0; position: relative; }
.keyarea .label { font-weight: bold; }
.keyarea .output { display: block; font-family: monospace; font-size: 1.25em; }
.keyarea .qrcode_public { display: inline-block; float: left; }
.keyarea .qrcode_private { display: inline-block; position: relative; top: 28px; float: right; }
.pubkeyhex { word-wrap: break-word; }
body { font-family: Arial; }
.faqs ol { padding: 0 0 0 25px; }
.faqs li { padding: 3px 0; }
.question { padding: 10px 15px; text-align: left; cursor: pointer; }
.question:hover, .expandable:hover { color: #77777A; }
.answer { padding: 0 15px 10px 25px; text-align: left; display: none; font-size: 80%; }
.faq { border: 0; border-top: 2px solid rgb(4, 130, 230); }

#btcaddress, #btcprivwif, #detailaddress, #detailaddresscomp, #detailprivwif, #detailprivwifcomp { font-family: monospace; font-size: 1.25em; }
#seedpoolarea { display: none; }
#seedpooldisplay {  font-family: monospace; font-size: 1em; width: 640px; padding: 15px 5px; word-wrap: break-word; }
.seedpoint { width: 6px; height: 6px; display: block; border-radius: 3px; background-color: rgb(4, 130, 230); position: absolute; z-index: 10; }
#generate { font-family: monospace; font-size: 1.25em; height: 305px; text-align: left; position: relative; padding: 5px; border: 2px solid rgb(4, 130, 230); }
#generate span { padding: 5px 5px 0 5px; }
#generatekeyinput { position: relative; z-index: 20; }
#keyarea { height: 188px; }
#keyarea .pubaddress { float: none; display: block; padding: 0; height: auto; }
#keyarea .label { text-decoration: none; }
#keyarea .privwif { float: none; text-align: right; position: relative; padding: 0; }
#keyarea .qrcode_public { float: none; display: block; padding: 13px 11px 11px 11px; }
#keyarea .qrcode_private { float: none; display: block; top: 0; text-align: right; padding: 13px 11px 11px 11px; }
#keyarea .private { width: 30%; display: table-cell; }
#keyarea .public { width: 30%; display: table-cell; }
#singlearea { font-size: 90%; }
#singlesecret { position: relative; top: -88px; float: right; right: 200px; color: red; font-weight: bolder; font-size: 200%;  }
#singleshare { position: relative; top: -88px; float: left; left: 160px; color: green; font-weight: bolder; font-size: 200%;  }
#singlesafety { text-align: left; padding: 5px; border-top: 2px solid rgb(4, 130, 230); top: -25px; position: relative; }

#main { position: relative; text-align: center; margin: 0px auto; width: 1005px; }
#logo { width: 578px; height: 80px; }
		
#paperarea { min-height: 120px; display: none; }
#paperarea .keyarea { border: 2px solid rgb(4, 130, 230); border-top: 0; }
#paperarea .keyarea.art { display: block; height: auto; border: 0; font-family: Ubuntu, Arial; padding: 0; margin: 0; }
#paperarea .artwallet .papersvg { width: <?php echo $img_w; ?>; height: <?php echo $img_h; ?>; border: 0; margin: 0; padding: 0; left: 0; }
#paperarea .artwallet .qrcode_public { top: <?php echo $qr_pub_pos_t; ?>; left: <?php echo $qr_pub_pos_l; ?>; z-index: 100; margin: 0; float: none; display: block; position: absolute; background-color: #FFFFFF; 
		                                       padding: 5px 5px 2px 5px;}  
#paperarea .artwallet .qrcode_private { top: <?php echo $qr_priv_pos_t; ?>; left: <?php echo $qr_priv_pos_l; ?>; z-index: 100; margin: 0; float: none; display: block; position: absolute; background-color: #FFFFFF; 
		                                        padding: 5px 5px 2px 5px;}
#paperarea .artwallet .btcaddress  
{
	position: absolute; top: -99923px; left: -99999109px; z-index: 100; font-size: 10px; background-color: transparent;
		    font-weight:bold; color: #000000; margin: 0;





} 
#paperarea .artwallet .btcprivwif  
{
	position: absolute; top: -9999999999999999246px; left: -9999999999999370px; z-index: 100; font-size: 7px; background-color: transparent;
		    font-weight:bold; color: #000000; margin: 0;  
				-webkit-transform-origin:top left; -webkit-transform:rotate(-90deg);
				-moz-transform-origin:top left;    -moz-transform:rotate(-90deg);
				-ms-transform-origin:top left;     -ms-transform:rotate(-90deg);
				-o-transform-origin:top left;      -o-transform:rotate(-90deg);
				transform-origin:top left;         transform:rotate(-90deg);
}
#paperarea .artwallet .btcencryptedkey
{
	position: absolute; top: -999999999227px; left: -99999999999360px; z-index: 100; font-size: 7px; background-color: transparent;
		    font-weight:bold; color: #000000; margin: 0;  
				-webkit-transform-origin:top left; -webkit-transform:rotate(-90deg);
				-moz-transform-origin:top left;    -moz-transform:rotate(-90deg);
				-ms-transform-origin:top left;     -ms-transform:rotate(-90deg);
				-o-transform-origin:top left;      -o-transform:rotate(-90deg);
				transform-origin:top left;         transform:rotate(-90deg);
}
#bulkarea .body { padding: 5px 0 0 0; }
#bulkarea .format { font-style: italic; font-size: 90%; }
#bulktextarea { font-size: 90%; width: 98%; margin: 4px 0 0 0; }
#brainarea .keyarea { visibility: hidden; min-height: 110px; }
#detailkeyarea { padding: 10px; }
#detailarea { margin: 0; text-align: left; }
#detailarea .notes { text-align: left; font-size: 80%; padding: 0 0 20px 0; }
#detailarea .pubqr .item .label { text-decoration: none; }
#detailarea .pubqr .item { float: left; margin: 10px 0; position: relative; }
#detailarea .pubqr .item.right { float: right; position: relative; top: 0; } 
#detailarea .privqr .item .label { text-decoration: none; }
#detailarea .privqr .item { float: left; margin: 0; position: relative; }
#detailarea .privqr .item.right { float: right; position: relative; } 
#detailarea .item { margin: 10px 0; position: relative; font-size: 90%; padding: 1px 0; }
#detailarea .item.clear { clear: both; padding-top: 10px; }
#detailarea .label { display: block; font-weight: bold; }
#detailarea .output { display: block; font-family: monospace; font-size: 1.25em; }
#detailarea #detailqrcodepublic { position: relative; float: left; margin: 0 10px 0 0; padding: 13px 11px 11px 11px; }
#detailarea #detailqrcodepubliccomp { position: relative; float: right; margin: 0 0 0 10px; padding: 13px 11px 11px 11px; }
#detailarea #detailqrcodeprivate { position: relative; float: left; margin: 0 10px 0 0; padding: 13px 11px 11px 11px; }
#detailarea #detailqrcodeprivatecomp { position: relative; float: right; margin: 0 0 0 10px; padding: 13px 11px 11px 11px; }
#detailpubkey { width: 590px; }
#detailbip38commands { display: none; padding-top: 5px; }	
#vanityarea { text-align: left; }
#vanityarea .label { text-decoration: underline; }
#vanityarea .output { font-family: monospace; font-size: 1.25em; display: block; }
#vanityarea .notes { text-align: left; font-size: 80%; padding: 0 0 20px 0; }
#vanitystep1area { display: none; text-align: left; position: relative; padding: 15px; border-bottom: 2px solid rgb(4, 130, 230); }
#vanitystep1label { padding-left: 5px; }
#vanitystep2area { border-top: 2px solid rgb(4, 130, 230); display: block; padding: 15px; }
#vanitystep2inputs { padding: 0 15px 10px 15px; }
#vanitycalc { margin-top: 5px; }
		
.englishjson { text-align: center; padding: 40px 0 20px 0; }
.unittests { text-align: center; }
.unittests div { width: 894px; font-family: monospace; text-align: left; margin: auto; padding: 5px; border: 1px solid black; }
#testnet { display: none; background-color: Orange; color: #000000; border-radius: 5px; font-weight: bold; padding: 10px 0; margin: 0 auto 20px auto; }
#busyblock { position: fixed; display: none; background: url("data:image/gif;base64,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") #ccc no-repeat center; opacity: 0.4; width: 100%; height: 100%; top: 0; left: 0; z-index: 5000; }
#busyblock.busy { display: block; }
.hide { display: none; }
.show { display: block; }
	
/* IE8 */
.qrcodetable { border-width: 0px; border-style: none; border-color: #0000ff; border-collapse: collapse; }
.qrcodetddark { border-width: 0px; border-style: none; border-color: #0000ff; border-collapse: collapse; padding: 0; margin: 0; width: 2px; height: 2px; background-color: #000000; }
.qrcodetdlight { border-width: 0px; border-style: none; border-color: #0000ff; border-collapse: collapse; padding: 0; margin: 0; width: 2px; height: 2px; background-color: #ffffff; }
		
@media screen 	
{
	#tagline { margin: 0 0 15px 0; font-style: italic; }
	.menu { text-align: left; }
	.menu .tab { border-top-left-radius: 5px; border-top-right-radius: 5px; display: inline-block; background-color: #AC96B3;
					border: 2px solid rgb(4, 130, 230) ; padding: 5px; margin: 0 2px 0 0; position: relative; top: 2px; z-index: 110; cursor: pointer; }
	.menu .tab:hover { color: #FFF; }
	.menu .tab.selected { background-color: #FFF; border-bottom: 2px solid #FFF; cursor: default; }
	.menu .tab.selected:hover { color: #000; }
	.pagebreak { height: 50px; }
	.commands { border-bottom: 2px solid rgb(4, 130, 230) ;  padding: 10px 2px; margin-bottom: 0; }
	.commands .row { padding: 0 0; text-align: left; } 
	.commands .row.extra { padding-top: 6px; }
	.commands span { padding: 0 10px; }
	.commands span.print { float: right; }
	.commands span.right { float: right; }
	.expandable { padding: 10px 15px; text-align: left; cursor: pointer; }

    #menu { visibility: hidden; font-size: 90%; }
    #culturemenu { text-align: right; padding: 0 20px; }
    #culturemenu span { padding: 3px; }
    #culturemenu .selected { text-decoration: none; color: #000000; }

	#braincommands .row .label { width: 200px; display: inline-block; }
	#braincommands .notes { font-size: 80%; display: block; padding: 5px 10px; }
	#brainpassphrase { width: 280px; }
	#brainpassphraseconfirm { width: 280px; }
	#brainwarning {  }
	#detailcommands { padding: 10px 0; }
	#detailcommands span { padding: 0 10px; }
	#detailprivkey { width: 250px; }
	#detailprivkeypassphrase { width: 250px; }
	.paper .commands { border: 2px solid rgb(4, 130, 230); }
	#bulkstartindex, #paperlimit, #paperlimitperpage { width: 35px; } 
	#bulklimit { width: 45px; }
			
	.footer { font-size: 90%; clear: both; width: 750px; padding: 10px 0 10px 0; margin: 50px auto auto auto; }
	.footer div span.item { padding: 10px; }
	.footer .authorbtc { float: left; width: 470px; }
	.footer .authorbtc span.item { text-align: left; display: block; padding: 0 20px; }
	.footer .authorbtc div { position: relative; z-index: 100; }
	.footer .authorpgp { position: relative; }
	.footer .authorpgp span.item { text-align: right; display: block; padding: 0 20px; }
	.footer .copyright { font-size: 80%; clear: both; padding: 5px 0; }
	.footer .copyright span { padding: 10px 2px; }
}
@media print
{
	#main { width: auto; }
	#singlearea { border: 0; }
	#singlesafety { border: 0; }
	#paperarea .keyarea:first-child { border-top: 2px solid rgb(4, 130, 230); }
	#paperarea .keyarea.art:first-child { border: 0; }
	.pagebreak { height: 1px; }
	.paper #logo { display: none; }
	.menu, .footer, .commands, #tagline, #faqs, #culturemenu { display: none; }
	#detailprivwif { width: 285px; word-wrap: break-word; }
	#detailprivwifcomp { width: 310px; word-wrap: break-word; text-align: right; }
	#detailarea .privqr .item.right { width: 310px; }
	#detailarea .privqr .item { width: 285px; }
	#detailarea .notes { display: none; }
	#seedpoolarea { display: none; }
	.faq { display: none; }
}
	</style>
</head>
<body onclick="SecureRandom.seedTime();" onmousemove="ninja.seeder.seed(event);">
	<div id="busyblock"></div>
	<div id="main">
		<div id="culturemenu">
			<span><a href="?culture=en" id="cultureen" class="selected">English</a></span> | 
			<span><a href="?culture=es" id="culturees">EspaÃ±ol</a></span> | 
			<span><a href="?culture=fr" id="culturefr">FranÃ§ais</a></span> | 
			<span><a href="?culture=el" id="cultureel">ÎµÎ»Î»Î·Î½Î¹ÎºÎ¬</a></span> | 
			<span><a href="?culture=it" id="cultureit">italiano</a></span> | 
			<span><a href="?culture=de" id="culturede">Deutsch</a></span> | 
			<span><a href="?culture=cs" id="culturecs">ÄŒesky</a></span>
		</div>
		<img alt="CryptoWallets.org" title="CryptoWallets.org" id="logo" src="data:image/png;base64,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" />
		<div id="tagline">Open Source JavaScript Client-Side Bitcoin Wallet Generator</div>
		<div id="seedpoolarea"><textarea rows="16" cols="62" id="seedpool"></textarea></div>
		<div id="testnet"></div>
		<div class="menu" id="menu">
			<div class="tab selected" id="singlewallet" onclick="ninja.tabSwitch(this);">Single Wallet</div>
			<div class="tab" id="paperwallet" onclick="ninja.tabSwitch(this);">Paper Wallet</div>
			<div class="tab" id="bulkwallet" onclick="ninja.tabSwitch(this);">Bulk Wallet</div>
			<div class="tab" id="brainwallet" onclick="ninja.tabSwitch(this);">Brain Wallet</div>
			<div class="tab" id="vanitywallet" onclick="ninja.tabSwitch(this);">Vanity Wallet</div>
			<div class="tab" id="detailwallet" onclick="ninja.tabSwitch(this);">Wallet Details</div>
		</div>
		
		<div id="generate">
			<span id="generatelabelbitcoinaddress">Generating Bitcoin Address...</span><br />
			<span id="generatelabelmovemouse">MOVE your mouse around to add some extra randomness... </span><span id="mousemovelimit"></span><br />
			<span id="generatelabelkeypress">OR type some random characters into this textbox</span> <input type="text" id="generatekeyinput" onkeypress="ninja.seeder.seedKeyPress(event);" /><br />
			<div id="seedpooldisplay"></div>
		</div>

		<div id="wallets">
			<div id="singlearea" class="walletarea">
				<div class="commands">
					<div id="singlecommands" class="row">
						<span><input type="button" id="newaddress" value="Generate New Address" onclick="ninja.wallets.singlewallet.generateNewAddressAndKey();" /></span>
						<span class="print"><input type="button" name="print" value="Print" id="singleprint" onclick="window.print();" /></span>
					</div>
				</div>
				<div id="keyarea" class="keyarea">
					<div class="public">
						<div class="pubaddress">
							<span class="label" id="singlelabelbitcoinaddress">Bitcoin Address</span>
						</div>
						<div id="qrcode_public" class="qrcode_public"></div>
						<div class="pubaddress">
							<span class="output" id="btcaddress"></span>
						</div>
						<div id="singleshare">SHARE</div>
					</div>
					<div class="private">
						<div class="privwif">
							<span class="label" id="singlelabelprivatekey">Private Key (Wallet Import Format)</span>
						</div>
						<div id="qrcode_private" class="qrcode_private"></div>
						<div class="privwif">
							<span class="output" id="btcprivwif"></span>
						</div>
						<div id="singlesecret">SECRET</div>
					</div>				
				</div>
				
				<div id="singlesafety">
					<p id="singletip1"><b>A Bitcoin wallet</b> is as simple as a single pairing of a Bitcoin address with its corresponding Bitcoin private key. Such a wallet has been generated for you in your web browser and is displayed above.</p>
					<p id="singletip2"><b>To safeguard this wallet</b> you must print or otherwise record the Bitcoin address and private key. It is important to make a backup copy of the private key and store it in a safe location. This site does not have knowledge of your private key. If you are familiar with PGP you can download this all-in-one HTML page and check that you have an authentic version from the author of this site by matching the SHA1 hash of this HTML with the SHA1 hash available in the signed version history document linked on the footer of this site. If you leave/refresh the site or press the "Generate New Address" button then a new private key will be generated and the previously displayed private key will not be retrievable.	Your Bitcoin private key should be kept a secret. Whomever you share the private key with has access to spend all the bitcoins associated with that address. If you print your wallet then store it in a zip lock bag to keep it safe from water. Treat a paper wallet like cash.</p>
					<p id="singletip3"><b>Add funds</b> to this wallet by instructing others to send bitcoins to your Bitcoin address.</p>
					<p id="singletip4"><b>Check your balance</b> by going to blockchain.info or blockexplorer.com and entering your Bitcoin address.</p>
					<p id="singletip5"><b>Spend your bitcoins</b> by going to blockchain.info or mtgox.com and sweep the full balance of your private key into your account at their website. You can also spend your funds by downloading one of the popular bitcoin p2p clients and importing your private key to the p2p client wallet. Keep in mind when you import your single key to a bitcoin p2p client and spend funds your key will be bundled with other private keys in the p2p client wallet. When you perform a transaction your change will be sent to another bitcoin address within the p2p client wallet. You must then backup the p2p client wallet and keep it safe as your remaining bitcoins will be stored there. Satoshi advised that one should never delete a wallet.</p>
				</div>
			</div>

			<div id="paperarea">
				<div class="commands">
					<div id="papercommands" class="row">
						<span><label id="paperlabelhideart" for="paperart">Hide Art?</label> <input type="checkbox" id="paperart" onchange="ninja.wallets.paperwallet.toggleArt(this);" /></span>
						<span><label id="paperlabeladdressestogenerate" for="paperlimit">Addresses to generate:</label> <input type="text" id="paperlimit" /></span>
						<span><input type="button" id="papergenerate" value="Generate" onclick="ninja.wallets.paperwallet.build(document.getElementById('paperlimit').value * 1, document.getElementById('paperlimitperpage').value * 1, !document.getElementById('paperart').checked, document.getElementById('paperpassphrase').value);" /></span>
						<span class="print"><input type="button" name="print" value="Print" id="paperprint" onclick="window.print();" /></span>
					</div>
					<div id="paperadvancedcommands" class="row extra">
						<span><label id="paperlabelencrypt" for="paperencrypt">BIP38 Encrypt?</label> <input type="checkbox" id="paperencrypt" onchange="ninja.wallets.paperwallet.toggleEncrypt(this);" /></span>
						<span><label id="paperlabelBIPpassphrase" for="paperpassphrase">Passphrase:</label> <input type="text" id="paperpassphrase" /></span>
						<span><label id="paperlabeladdressesperpage" for="paperlimitperpage">Addresses per page:</label> <input type="text" id="paperlimitperpage" /></span>
					</div>
				</div>
				<div id="paperkeyarea"></div>
			</div>
			
			<div id="bulkarea" class="walletarea">
				<div class="commands">
					<div id="bulkcommands" class="row">
						<span><label id="bulklabelstartindex" for="bulkstartindex">Start index:</label> <input type="text" id="bulkstartindex" value="1" /></span>
						<span><label id="bulklabelrowstogenerate" for="bulklimit">Rows to generate:</label> <input type="text" id="bulklimit" value="3" /></span>
						<span><label id="bulklabelcompressed" for="bulkcompressed">Compressed addresses?</label> <input type="checkbox" id="bulkcompressed" /></span>
						<span><input type="button" id="bulkgenerate" value="Generate" onclick="ninja.wallets.bulkwallet.buildCSV(document.getElementById('bulklimit').value * 1, document.getElementById('bulkstartindex').value * 1, document.getElementById('bulkcompressed').checked);" /> </span>
						<span class="print"><input type="button" name="print" id="bulkprint" value="Print" onclick="window.print();" /></span>
					</div>
				</div>
				<div class="body">
					<span class="label" id="bulklabelcsv">Comma Separated Values:</span> <span class="format" id="bulklabelformat">Index,Address,Private Key (WIF)</span>
					<textarea rows="20" cols="88" id="bulktextarea"></textarea>
				</div>
				<div class="faqs">
					<div id="bulkfaq1" class="faq"> 
						<div id="bulkq1" class="question" onclick="ninja.wallets.bulkwallet.openCloseFaq(1);">
							<span id="bulklabelq1">Why should I use a Bulk Wallet to accept bitcoins on my website?</span>
							<div id="bulke1" class="more"></div>
						</div>
						<div id="bulka1" class="answer">The traditional approach to accepting bitcoins on your website requires that you install the official bitcoin client daemon ("bitcoind"). Many website hosting packages don't support installing the bitcoin daemon. Also, running the bitcoin daemon on your web server means your private keys are hosted on the server and could get stolen if your web server is hacked. When using a Bulk Wallet you can upload only the bitcoin addresses and not the private keys to your web server. Then you don't have to worry about your bitcoin wallet being stolen if your web server is hacked. </div>
					</div>
					<div id="bulkfaq2" class="faq"> 
						<div id="bulkq2" class="question" onclick="ninja.wallets.bulkwallet.openCloseFaq(2);">
							<span id="bulklabelq2">How do I use a Bulk Wallet to accept bitcoins on my website?</span>
							<div id="bulke2" class="more"></div>
						</div>
						<div id="bulka2" class="answer">
							<ol>
							<li id="bulklabela2li1">Use the Bulk Wallet tab to pre-generate a large number of bitcoin addresses (10,000+). Copy and paste the generated comma separated values (CSV) list to a secure text file on your computer. Backup the file you just created to a secure location.</li>
							<li id="bulklabela2li2">Import the bitcoin addresses into a database table on your web server. (Don't put the wallet/private keys on your web server, otherwise you risk hackers stealing your coins. Just the bitcoin addresses as they will be shown to customers.)</li>
							<li id="bulklabela2li3">Provide an option on your website's shopping cart for your customer to pay in Bitcoin. When the customer chooses to pay in Bitcoin you will then display one of the addresses from your database to the customer as his "payment address" and save it with his shopping cart order.</li>
							<li id="bulklabela2li4">You now need to be notified when the payment arrives. Google "bitcoin payment notification" and subscribe to at least one bitcoin payment notification service. There are various services that will notify you via Web Services, API, SMS, Email, etc. Once you receive this notification, which could be programmatically automated, you can process the customer's order. To manually check if a payment has arrived you can use Block Explorer. Replace THEADDRESSGOESHERE with the bitcoin address you are checking. It could take between 10 minutes to one hour for the transaction to be confirmed.<br />http://www.blockexplorer.com/address/THEADDRESSGOESHERE<br /><br />Unconfirmed transactions can be viewed at: http://blockchain.info/ <br />You should see the transaction there within 30 seconds.</li>
							<li id="bulklabela2li5">Bitcoins will safely pile up on the block chain. Use the original wallet file you generated in step 1 to spend them.</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			
			<div id="brainarea" class="walletarea">
				<div id="braincommands" class="commands">
					<div class="row">
						<span id="brainlabelenterpassphrase" class="label"><label for="brainpassphrase">Enter Passphrase: </label></span>
						<input tabindex="1" type="password" id="brainpassphrase" value="" onfocus="this.select();" onkeypress="if (event.keyCode == 13) ninja.wallets.brainwallet.view();" />
						<span><label id="brainlabelshow" for="brainpassphraseshow">Show?</label> <input type="checkbox" id="brainpassphraseshow" onchange="ninja.wallets.brainwallet.showToggle(this);" /></span>
						<span class="print"><input type="button" name="print" id="brainprint" value="Print" onclick="window.print();" /></span>
					</div>
					<div class="row extra">
						<span class="label" id="brainlabelconfirm"><label for="brainpassphraseconfirm">Confirm Passphrase: </label></span>
						<input tabindex="2" type="password" id="brainpassphraseconfirm" value="" onfocus="this.select();" onkeypress="if (event.keyCode == 13) ninja.wallets.brainwallet.view();" />
						<span><input tabindex="3" type="button" id="brainview" value="View" onclick="ninja.wallets.brainwallet.view();" /></span>
						<span id="brainalgorithm" class="notes right">Algorithm: SHA256(passphrase)</span>
					</div>
					<div class="row extra"><span id="brainwarning"></span></div>
				</div>
				<div id="brainkeyarea" class="keyarea">
					<div class="public">
						<div id="brainqrcodepublic" class="qrcode_public"></div>
						<div class="pubaddress">
							<span class="label" id="brainlabelbitcoinaddress">Bitcoin Address:</span>
							<span class="output" id="brainbtcaddress"></span>
						</div>
					</div>
					<div class="private">
						<div id="brainqrcodeprivate" class="qrcode_private"></div>
						<div class="privwif">
							<span class="label" id="brainlabelprivatekey">Private Key (Wallet Import Format):</span>
							<span class="output" id="brainbtcprivwif"></span>
						</div>
					</div>
				</div>
			</div>
			
			<div id="vanityarea" class="walletarea">
				<div id="vanitystep1label" class="commands expandable" onclick="ninja.wallets.vanitywallet.openCloseStep(1);">
					<span><label id="vanitylabelstep1">Step 1 - Generate your "Step1 Key Pair"</label> <input type="button" id="vanitynewkeypair" 
						value="Generate" onclick="ninja.wallets.vanitywallet.generateKeyPair();" /></span>
					<div id="vanitystep1icon" class="more"></div>
				</div>
				<div id="vanitystep1area">
					<div>
						<span class="label" id="vanitylabelstep1publickey">Step 1 Public Key:</span>
						<div class="output pubkeyhex" id="vanitypubkey"></div>
						<br /><div class="notes" id="vanitylabelstep1pubnotes">Copy and paste the above into the Your-Part-Public-Key field in the Vanity Pool Website.</div>
					</div>
					<div>
						<span class="label" id="vanitylabelstep1privatekey">Step 1 Private Key:</span>
						<span class="output" id="vanityprivatekey"></span>
						<br /><div class="notes" id="vanitylabelstep1privnotes">Copy and paste the above Private Key field into a text file. Ideally save to an encrypted drive. You will need this to retrieve the Bitcoin Private Key once the Pool has found your prefix.</div>
					</div>
				</div>
				<div id="vanitystep2label" class="expandable" onclick="ninja.wallets.vanitywallet.openCloseStep(2);">
					<span id="vanitylabelstep2calculateyourvanitywallet">Step 2 - Calculate your Vanity Wallet</span>
					<div id="vanitystep2icon" class="more"></div>
				</div>
				<div id="vanitystep2inputs">
					<div>
						<span id="vanitylabelenteryourpart">Enter Your Part Private Key (generated in Step 1 above and previously saved):</span>
						<br /><span class="notes" id="vanitylabelnote1">[NOTE: this input box can accept a public key or private key]</span>
					</div>
					<div><textarea id="vanityinput1" rows="2" cols="90" onfocus="this.select();"></textarea></div>
					<div>
						<span id="vanitylabelenteryourpoolpart">Enter Pool Part Private Key (from Vanity Pool):</span>
						<br /><span class="notes" id="vanitylabelnote2">[NOTE: this input box can accept a public key or private key]</span>
					</div>
					<div><textarea id="vanityinput2" rows="2" cols="90" onfocus="this.select();"></textarea></div>
					<div>
						<label for="vanityradioadd" id="vanitylabelradioadd">Add</label> <input type="radio" id="vanityradioadd" name="vanityradio" value="add" checked />
						<label for="vanityradiomultiply" id="vanitylabelradiomultiply">Multiply</label> <input type="radio" id="vanityradiomultiply" name="vanityradio" value="multiply" />
					</div>
					<div><input type="button" id="vanitycalc" value="Calculate Vanity Wallet" onclick="ninja.wallets.vanitywallet.addKeys();" /></div>
				</div>
				<div id="vanitystep2area">
					<div>
						<span class="label" id="vanitylabelbitcoinaddress">Vanity Bitcoin Address:</span>
						<span class="output" id="vanityaddress"></span>
						<br /><div class="notes" id="vanitylabelnotesbitcoinaddress">The above is your new address that should include your required prefix.</div>
					</div>
					
					<div>
						<span class="label" id="vanitylabelpublickeyhex">Vanity Public Key (HEX):</span>
						<span class="output pubkeyhex" id="vanitypublickeyhex"></span>
						<br /><div class="notes" id="vanitylabelnotespublickeyhex">The above is the Public Key in hexadecimal format. </div>
					</div>

					<div>
						<span class="label" id="vanitylabelprivatekey">Vanity Private Key (WIF):</span>
						<span class="output" id="vanityprivatekeywif"></span>
						<br /><div class="notes" id="vanitylabelnotesprivatekey">The above is the Private Key to load into your wallet. </div>
					</div>
				</div>
			</div>

			<div id="detailarea" class="walletarea">	
				<div id="detailcommands" class="commands">
					<span><label id="detaillabelenterprivatekey" for="detailprivkey">Enter Private Key</label></span>
					<input type="text" id="detailprivkey" value="" onfocus="this.select();" onkeypress="if (event.keyCode == 13) ninja.wallets.detailwallet.viewDetails();" />
					<span><input type="button" id="detailview" value="View Details" onclick="ninja.wallets.detailwallet.viewDetails();" /></span>
					<span class="print"><input type="button" name="print" id="detailprint" value="Print" onclick="window.print();" /></span>
					<div class="row extra">
						<span><label id="detailkeyformats">Key Formats: WIF, WIFC, HEX, B64, B6, MINI, BIP38</label></span>
					</div>
					<div id="detailbip38commands">
						<span><label id="detaillabelpassphrase">Enter BIP38 Passphrase</label> <input type="text" id="detailprivkeypassphrase" value="" onfocus="this.select();" onkeypress="if (event.keyCode == 13) ninja.wallets.detailwallet.viewDetails();" /></span>
						<span><input type="button" id="detaildecrypt" value="Decrypt BIP38" onclick="ninja.wallets.detailwallet.viewDetails();" /></span>
					</div>
				</div>
				<div id="detailkeyarea">
					<div class="notes">
						<span id="detaillabelnote1">Your Bitcoin Private Key is a unique secret number that only you know. It can be encoded in a number of different formats. Below we show the Bitcoin Address and Public Key that corresponds to your Private Key as well as your Private Key in the most popular encoding formats (WIF, WIFC, HEX, B64, MINI).</span>
						<br /><br />
						<span id="detaillabelnote2">Bitcoin v0.6+ stores public keys in compressed format. The client now also supports import and export of private keys with importprivkey/dumpprivkey. The format of the exported private key is determined by whether the address was generated in an old or new wallet.</span>
					</div>
					<div class="pubqr">
						<div class="item">
							<span class="label" id="detaillabelbitcoinaddress">Bitcoin Address</span>
							<div id="detailqrcodepublic" class="qrcode_public"></div>
							<span class="output" id="detailaddress"></span>
						</div>					
						<div class="item right">
							<span class="label" id="detaillabelbitcoinaddresscomp">Bitcoin Address Compressed</span>
							<div id="detailqrcodepubliccomp" class="qrcode_public"></div>
							<span class="output" id="detailaddresscomp"></span>
						</div>
					</div>
					<br /><br />
					<div class="item clear">
						<span class="label" id="detaillabelpublickey">Public Key (130 characters [0-9A-F]):</span>
						<span class="output pubkeyhex" id="detailpubkey"></span>
					</div>
					<div class="item">
						<span class="label" id="detaillabelpublickeycomp">Public Key (compressed, 66 characters [0-9A-F]):</span>
						<span class="output" id="detailpubkeycomp"></span>
					</div>
					<hr />
					<div class="privqr">
						<div class="item">
							<span class="label"><span id="detaillabelprivwif">Private Key WIF<br />51 characters base58, starts with a</span> <span id="detailwifprefix">'5'</span></span>
							<div id="detailqrcodeprivate" class="qrcode_private"></div>
							<span class="output" id="detailprivwif"></span>
						</div>
						<div class="item right">
							<span class="label"><span id="detaillabelprivwifcomp">Private Key WIF Compressed<br />52 characters base58, starts with a</span> <span id="detailcompwifprefix">'K' or 'L'</span></span>
							<div id="detailqrcodeprivatecomp" class="qrcode_private"></div>
							<span class="output" id="detailprivwifcomp"></span>
						</div>
					</div>
					<br /><br />
					<div class="item clear">
						<span class="label" id="detaillabelprivhex">Private Key Hexadecimal Format (64 characters [0-9A-F]):</span>
						<span class="output" id="detailprivhex"></span>
					</div>
					<div class="item">
						<span class="label" id="detaillabelprivb64">Private Key Base64 (44 characters):</span>
						<span class="output" id="detailprivb64"></span>
					</div>
					<div class="item" style="display: none;" id="detailmini">
						<span class="label" id="detaillabelprivmini">Private Key Mini Format (22, 26 or 30 characters, starts with an 'S'):</span>
						<span class="output" id="detailprivmini"></span>
					</div>
					<div class="item" style="display: none;" id="detailb6">
						<span class="label" id="detaillabelprivb6">Private Key Base6 Format (99 characters [0-5]):</span>
						<span class="output" id="detailprivb6"></span>
					</div>
					<div class="item" style="display: none;" id="detailbip38">
						<span class="label" id="detaillabelprivbip38">Private Key BIP38 Format (58 characters base58, starts with '6P'):</span>
						<span class="output" id="detailprivbip38"></span>
					</div>
				</div>
				<div class="faqs">
					<div id="detailfaq1" class="faq"> 
						<div id="detailq1" class="question" onclick="ninja.wallets.detailwallet.openCloseFaq(1);">
							<span id="detaillabelq1">How do I make a wallet using dice? What is B6?</span>
							<div id="detaile1" class="more"></div>
						</div>
						<div id="detaila1" class="answer">An important part of creating a Bitcoin wallet is ensuring the random numbers used to create the wallet are truly random. Physical randomness is better than computer generated pseudo-randomness. The easiest way to generate physical randomness is with dice. To create a Bitcoin private key you only need one six sided die which you roll 99 times. Stopping each time to record the value of the die. When recording the values follow these rules: 1=1, 2=2, 3=3, 4=4, 5=5, 6=0. By doing this you are recording the big random number, your private key, in B6 or base 6 format. You can then enter the 99 character base 6 private key into the text field above and click View Details. You will then see the Bitcoin address associated with your private key. You should also make note of your private key in WIF format since it is more widely used.</div>
					</div>
				</div>
			</div>
		</div>

		<div id="footer" class="footer">
			<div class="authorbtc">
				<div>
					<span class="item"><span id="footerlabeldonations">Donate:</span> <b>1BZr4d36H4ArdMwdTypGPkWRKg8xxGSp2Q</b></span>
					<span class="item"><span id="footerlabeldonations">Source Donations:</span> <b>1NiNja</b>1bUmhSoTXozBRBEtR8LeF9TGbZBN</span>
					<span class="item"></span>
					<span class="item" id="footerlabeltranslatedby"></span>
				</div>
			</div>
			<div class="authorpgp">
				<span class="item"><a target="_blank" id="footerlabelgithub"><b>Download: Right-Click + View Source</b></a></span>
				<span class="item"><a href="https://github.com/obesityspray/Dr.-Evil-Paper-Wallet" target="_blank" id="footerlabelgithub">GitHub Repository (v2.8.1)</a></span>
			</div>
			<div class="copyright">
				<span id="footerlabelcopyright1">Copyright Cryptowallets.org.</span>
				<span id="footerlabelcopyright2">JavaScript copyrights are included in the source.</span>
				<span id="footerlabelnowarranty">No warranty.</span>
			</div>
		</div>
	</div>

	<script type="text/javascript">

function viewthesource(){
window.location="view-source:"+window.location
}
	
	
	
var ninja = { wallets: {} };

ninja.privateKey = {
	isPrivateKey: function (key) {
		return (
					Bitcoin.ECKey.isWalletImportFormat(key) ||
					Bitcoin.ECKey.isCompressedWalletImportFormat(key) ||
					Bitcoin.ECKey.isHexFormat(key) ||
					Bitcoin.ECKey.isBase64Format(key) ||
					Bitcoin.ECKey.isMiniFormat(key)
				);
	},
	getECKeyFromAdding: function (privKey1, privKey2) {
		var n = EllipticCurve.getSECCurveByName("secp256k1").getN();
		var ecKey1 = new Bitcoin.ECKey(privKey1);
		var ecKey2 = new Bitcoin.ECKey(privKey2);
		// if both keys are the same return null
		if (ecKey1.getBitcoinHexFormat() == ecKey2.getBitcoinHexFormat()) return null;
		if (ecKey1 == null || ecKey2 == null) return null;
		var combinedPrivateKey = new Bitcoin.ECKey(ecKey1.priv.add(ecKey2.priv).mod(n));
		// compressed when both keys are compressed
		if (ecKey1.compressed && ecKey2.compressed) combinedPrivateKey.setCompressed(true);
		return combinedPrivateKey;
	},
	getECKeyFromMultiplying: function (privKey1, privKey2) {
		var n = EllipticCurve.getSECCurveByName("secp256k1").getN();
		var ecKey1 = new Bitcoin.ECKey(privKey1);
		var ecKey2 = new Bitcoin.ECKey(privKey2);
		// if both keys are the same return null
		if (ecKey1.getBitcoinHexFormat() == ecKey2.getBitcoinHexFormat()) return null;
		if (ecKey1 == null || ecKey2 == null) return null;
		var combinedPrivateKey = new Bitcoin.ECKey(ecKey1.priv.multiply(ecKey2.priv).mod(n));
		// compressed when both keys are compressed
		if (ecKey1.compressed && ecKey2.compressed) combinedPrivateKey.setCompressed(true);
		return combinedPrivateKey;
	},
	// 58 base58 characters starting with 6P
	isBIP38Format: function (key) {
		key = key.toString();
		return (/^6P[123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz]{56}$/.test(key));
	},
	BIP38EncryptedKeyToByteArrayAsync: function (base58Encrypted, passphrase, callback) {
		var hex;
		try {
			hex = Bitcoin.Base58.decode(base58Encrypted);
		} catch (e) {
			callback(new Error(ninja.translator.get("detailalertnotvalidprivatekey")));
			return;
		}

		// 43 bytes: 2 bytes prefix, 37 bytes payload, 4 bytes checksum
		if (hex.length != 43) {
			callback(new Error(ninja.translator.get("detailalertnotvalidprivatekey")));
			return;
		}
		// first byte is always 0x01 
		else if (hex[0] != 0x01) {
			callback(new Error(ninja.translator.get("detailalertnotvalidprivatekey")));
			return;
		}

		var expChecksum = hex.slice(-4);
		hex = hex.slice(0, -4);
		var checksum = Bitcoin.Util.dsha256(hex);
		if (checksum[0] != expChecksum[0] || checksum[1] != expChecksum[1] || checksum[2] != expChecksum[2] || checksum[3] != expChecksum[3]) {
			callback(new Error(ninja.translator.get("detailalertnotvalidprivatekey")));
			return;
		}

		var isCompPoint = false;
		var isECMult = false;
		var hasLotSeq = false;
		// second byte for non-EC-multiplied key
		if (hex[1] == 0x42) {
			// key should use compression
			if (hex[2] == 0xe0) {
				isCompPoint = true;
			}
			// key should NOT use compression
			else if (hex[2] != 0xc0) {
				callback(new Error(ninja.translator.get("detailalertnotvalidprivatekey")));
				return;
			}
		}
		// second byte for EC-multiplied key 
		else if (hex[1] == 0x43) {
			isECMult = true;
			isCompPoint = (hex[2] & 0x20) != 0;
			hasLotSeq = (hex[2] & 0x04) != 0;
			if ((hex[2] & 0x24) != hex[2]) {
				callback(new Error(ninja.translator.get("detailalertnotvalidprivatekey")));
				return;
			}
		}
		else {
			callback(new Error(ninja.translator.get("detailalertnotvalidprivatekey")));
			return;
		}

		var decrypted;
		var AES_opts = { mode: new Crypto.mode.ECB(Crypto.pad.NoPadding), asBytes: true };

		var verifyHashAndReturn = function () {
			var tmpkey = new Bitcoin.ECKey(decrypted); // decrypted using closure
			var base58AddrText = tmpkey.setCompressed(isCompPoint).getBitcoinAddress(); // isCompPoint using closure
			checksum = Bitcoin.Util.dsha256(base58AddrText); // checksum using closure

			if (checksum[0] != hex[3] || checksum[1] != hex[4] || checksum[2] != hex[5] || checksum[3] != hex[6]) {
				callback(new Error(ninja.translator.get("bip38alertincorrectpassphrase"))); // callback using closure
				return;
			}
			callback(tmpkey.getBitcoinPrivateKeyByteArray()); // callback using closure
		};

		if (!isECMult) {
			var addresshash = hex.slice(3, 7);
			Crypto_scrypt(passphrase, addresshash, 16384, 8, 8, 64, function (derivedBytes) {
				var k = derivedBytes.slice(32, 32 + 32);
				decrypted = Crypto.AES.decrypt(hex.slice(7, 7 + 32), k, AES_opts);
				for (var x = 0; x < 32; x++) decrypted[x] ^= derivedBytes[x];
				verifyHashAndReturn(); //TODO: pass in 'decrypted' as a param
			});
		}
		else {
			var ownerentropy = hex.slice(7, 7 + 8);
			var ownersalt = !hasLotSeq ? ownerentropy : ownerentropy.slice(0, 4);
			Crypto_scrypt(passphrase, ownersalt, 16384, 8, 8, 32, function (prefactorA) {
				var passfactor;
				if (!hasLotSeq) { // hasLotSeq using closure
					passfactor = prefactorA;
				} else {
					var prefactorB = prefactorA.concat(ownerentropy); // ownerentropy using closure
					passfactor = Bitcoin.Util.dsha256(prefactorB);
				}
				var kp = new Bitcoin.ECKey(passfactor);
				var passpoint = kp.setCompressed(true).getPub();

				var encryptedpart2 = hex.slice(23, 23 + 16);

				var addresshashplusownerentropy = hex.slice(3, 3 + 12);
				Crypto_scrypt(passpoint, addresshashplusownerentropy, 1024, 1, 1, 64, function (derived) {
					var k = derived.slice(32);

					var unencryptedpart2 = Crypto.AES.decrypt(encryptedpart2, k, AES_opts);
					for (var i = 0; i < 16; i++) { unencryptedpart2[i] ^= derived[i + 16]; }

					var encryptedpart1 = hex.slice(15, 15 + 8).concat(unencryptedpart2.slice(0, 0 + 8));
					var unencryptedpart1 = Crypto.AES.decrypt(encryptedpart1, k, AES_opts);
					for (var i = 0; i < 16; i++) { unencryptedpart1[i] ^= derived[i]; }

					var seedb = unencryptedpart1.slice(0, 0 + 16).concat(unencryptedpart2.slice(8, 8 + 8));

					var factorb = Bitcoin.Util.dsha256(seedb);

					var ps = EllipticCurve.getSECCurveByName("secp256k1");
					var privateKey = BigInteger.fromByteArrayUnsigned(passfactor).multiply(BigInteger.fromByteArrayUnsigned(factorb)).remainder(ps.getN());

					decrypted = privateKey.toByteArrayUnsigned();
					verifyHashAndReturn();
				});
			});
		}
	},
	BIP38PrivateKeyToEncryptedKeyAsync: function (base58Key, passphrase, compressed, callback) {
		var privKey = new Bitcoin.ECKey(base58Key);
		var privKeyBytes = privKey.getBitcoinPrivateKeyByteArray();
		var address = privKey.setCompressed(compressed).getBitcoinAddress();

		// compute sha256(sha256(address)) and take first 4 bytes
		var salt = Bitcoin.Util.dsha256(address).slice(0, 4);

		// derive key using scrypt
		var AES_opts = { mode: new Crypto.mode.ECB(Crypto.pad.NoPadding), asBytes: true };

		Crypto_scrypt(passphrase, salt, 16384, 8, 8, 64, function (derivedBytes) {
			for (var i = 0; i < 32; ++i) {
				privKeyBytes[i] ^= derivedBytes[i];
			}

			// 0x01 0x42 + flagbyte + salt + encryptedhalf1 + encryptedhalf2
			var flagByte = compressed ? 0xe0 : 0xc0;
			var encryptedKey = [0x01, 0x42, flagByte].concat(salt);
			encryptedKey = encryptedKey.concat(Crypto.AES.encrypt(privKeyBytes, derivedBytes.slice(32), AES_opts));
			encryptedKey = encryptedKey.concat(Bitcoin.Util.dsha256(encryptedKey).slice(0, 4));
			callback(Bitcoin.Base58.encode(encryptedKey));
		});
	},
	BIP38GenerateIntermediatePointAsync: function (passphrase, lotNum, sequenceNum, callback) {
		var noNumbers = lotNum === null || sequenceNum === null;
		var rng = new SecureRandom();
		var ownerEntropy, ownerSalt;

		if (noNumbers) {
			ownerSalt = ownerEntropy = new Array(8);
			rng.nextBytes(ownerEntropy);
		}
		else {
			// 1) generate 4 random bytes
			ownerSalt = new Array(4);

			rng.nextBytes(ownerSalt);

			// 2)  Encode the lot and sequence numbers as a 4 byte quantity (big-endian):
			// lotnumber * 4096 + sequencenumber. Call these four bytes lotsequence.
			var lotSequence = BigInteger(4096 * lotNum + sequenceNum).toByteArrayUnsigned();

			// 3) Concatenate ownersalt + lotsequence and call this ownerentropy.
			var ownerEntropy = ownerSalt.concat(lotSequence);
		}


		// 4) Derive a key from the passphrase using scrypt
		Crypto_scrypt(passphrase, ownerSalt, 16384, 8, 8, 32, function (prefactor) {
			// Take SHA256(SHA256(prefactor + ownerentropy)) and call this passfactor
			var passfactorBytes = noNumbers ? prefactor : Bitcoin.Util.dsha256(prefactor.concat(ownerEntropy));
			var passfactor = BigInteger.fromByteArrayUnsigned(passfactorBytes);

			// 5) Compute the elliptic curve point G * passfactor, and convert the result to compressed notation (33 bytes)
			var ellipticCurve = EllipticCurve.getSECCurveByName("secp256k1");
			var passpoint = ellipticCurve.getG().multiply(passfactor).getEncoded(1);

			// 6) Convey ownersalt and passpoint to the party generating the keys, along with a checksum to ensure integrity.
			// magic bytes "2C E9 B3 E1 FF 39 E2 51" followed by ownerentropy, and then passpoint
			var magicBytes = [0x2C, 0xE9, 0xB3, 0xE1, 0xFF, 0x39, 0xE2, 0x51];
			if (noNumbers) magicBytes[7] = 0x53;

			var intermediate = magicBytes.concat(ownerEntropy).concat(passpoint);

			// base58check encode
			intermediate = intermediate.concat(Bitcoin.Util.dsha256(intermediate).slice(0, 4));
			callback(Bitcoin.Base58.encode(intermediate));
		});
	},
	BIP38GenerateECAddressAsync: function (intermediate, compressed, callback) {
		// decode IPS
		var x = Bitcoin.Base58.decode(intermediate);
		//if(x.slice(49, 4) !== Bitcoin.Util.dsha256(x.slice(0,49)).slice(0,4)) {
		//	callback({error: 'Invalid intermediate passphrase string'});
		//}
		var noNumbers = (x[7] === 0x53);
		var ownerEntropy = x.slice(8, 8 + 8);
		var passpoint = x.slice(16, 16 + 33);

		// 1) Set flagbyte.
		// set bit 0x20 for compressed key
		// set bit 0x04 if ownerentropy contains a value for lotsequence
		var flagByte = (compressed ? 0x20 : 0x00) | (noNumbers ? 0x00 : 0x04);


		// 2) Generate 24 random bytes, call this seedb.
		var seedB = new Array(24);
		var rng = new SecureRandom();
		rng.nextBytes(seedB);

		// Take SHA256(SHA256(seedb)) to yield 32 bytes, call this factorb.
		var factorB = Bitcoin.Util.dsha256(seedB);

		// 3) ECMultiply passpoint by factorb. Use the resulting EC point as a public key and hash it into a Bitcoin
		// address using either compressed or uncompressed public key methodology (specify which methodology is used
		// inside flagbyte). This is the generated Bitcoin address, call it generatedaddress.
		var ec = EllipticCurve.getSECCurveByName("secp256k1").getCurve();
		var generatedPoint = ec.decodePointHex(ninja.publicKey.getHexFromByteArray(passpoint));
		var generatedBytes = generatedPoint.multiply(BigInteger.fromByteArrayUnsigned(factorB)).getEncoded(compressed);
		var generatedAddress = (new Bitcoin.Address(Bitcoin.Util.sha256ripe160(generatedBytes))).toString();

		// 4) Take the first four bytes of SHA256(SHA256(generatedaddress)) and call it addresshash.
		var addressHash = Bitcoin.Util.dsha256(generatedAddress).slice(0, 4);

		// 5) Now we will encrypt seedb. Derive a second key from passpoint using scrypt
		Crypto_scrypt(passpoint, addressHash.concat(ownerEntropy), 1024, 1, 1, 64, function (derivedBytes) {
			// 6) Do AES256Encrypt(seedb[0...15]] xor derivedhalf1[0...15], derivedhalf2), call the 16-byte result encryptedpart1
			for (var i = 0; i < 16; ++i) {
				seedB[i] ^= derivedBytes[i];
			}
			var AES_opts = { mode: new Crypto.mode.ECB(Crypto.pad.NoPadding), asBytes: true };
			var encryptedPart1 = Crypto.AES.encrypt(seedB.slice(0, 16), derivedBytes.slice(32), AES_opts);

			// 7) Do AES256Encrypt((encryptedpart1[8...15] + seedb[16...23]) xor derivedhalf1[16...31], derivedhalf2), call the 16-byte result encryptedseedb.
			var message2 = encryptedPart1.slice(8, 8 + 8).concat(seedB.slice(16, 16 + 8));
			for (var i = 0; i < 16; ++i) {
				message2[i] ^= derivedBytes[i + 16];
			}
			var encryptedSeedB = Crypto.AES.encrypt(message2, derivedBytes.slice(32), AES_opts);

			// 0x01 0x43 + flagbyte + addresshash + ownerentropy + encryptedpart1[0...7] + encryptedpart2
			var encryptedKey = [0x01, 0x43, flagByte].concat(addressHash).concat(ownerEntropy).concat(encryptedPart1.slice(0, 8)).concat(encryptedSeedB);

			// base58check encode
			encryptedKey = encryptedKey.concat(Bitcoin.Util.dsha256(encryptedKey).slice(0, 4));
			callback(generatedAddress, Bitcoin.Base58.encode(encryptedKey));
		});
	}
};

ninja.publicKey = {
	isPublicKeyHexFormat: function (key) {
		key = key.toString();
		return ninja.publicKey.isUncompressedPublicKeyHexFormat(key) || ninja.publicKey.isCompressedPublicKeyHexFormat(key);
	},
	// 130 characters [0-9A-F] starts with 04
	isUncompressedPublicKeyHexFormat: function (key) {
		key = key.toString();
		return /^04[A-Fa-f0-9]{128}$/.test(key);
	},
	// 66 characters [0-9A-F] starts with 02 or 03
	isCompressedPublicKeyHexFormat: function (key) {
		key = key.toString();
		return /^0[2-3][A-Fa-f0-9]{64}$/.test(key);
	},
	getBitcoinAddressFromByteArray: function (pubKeyByteArray) {
		var pubKeyHash = Bitcoin.Util.sha256ripe160(pubKeyByteArray);
		var addr = new Bitcoin.Address(pubKeyHash);
		return addr.toString();
	},
	getHexFromByteArray: function (pubKeyByteArray) {
		return Crypto.util.bytesToHex(pubKeyByteArray).toString().toUpperCase();
	},
	getByteArrayFromAdding: function (pubKeyHex1, pubKeyHex2) {
		var ecparams = EllipticCurve.getSECCurveByName("secp256k1");
		var curve = ecparams.getCurve();
		var ecPoint1 = curve.decodePointHex(pubKeyHex1);
		var ecPoint2 = curve.decodePointHex(pubKeyHex2);
		// if both points are the same return null
		if (ecPoint1.equals(ecPoint2)) return null;
		var compressed = (ecPoint1.compressed && ecPoint2.compressed);
		var pubKey = ecPoint1.add(ecPoint2).getEncoded(compressed);
		return pubKey;
	},
	getByteArrayFromMultiplying: function (pubKeyHex, ecKey) {
		var ecparams = EllipticCurve.getSECCurveByName("secp256k1");
		var ecPoint = ecparams.getCurve().decodePointHex(pubKeyHex);
		var compressed = (ecPoint.compressed && ecKey.compressed);
		// if both points are the same return null
		ecKey.setCompressed(false);
		if (ecPoint.equals(ecKey.getPubPoint())) {
			return null;
		}
		var bigInt = ecKey.priv;
		var pubKey = ecPoint.multiply(bigInt).getEncoded(compressed);
		return pubKey;
	},
	// used by unit test
	getDecompressedPubKeyHex: function (pubKeyHexComp) {
		var ecparams = EllipticCurve.getSECCurveByName("secp256k1");
		var ecPoint = ecparams.getCurve().decodePointHex(pubKeyHexComp);
		var pubByteArray = ecPoint.getEncoded(0);
		var pubHexUncompressed = ninja.publicKey.getHexFromByteArray(pubByteArray);
		return pubHexUncompressed;
	}
};
	</script>
	<script type="text/javascript">
ninja.seeder = {
	init: (function () {
		document.getElementById("generatekeyinput").value = "";
	})(),

	// number of mouse movements to wait for
	seedLimit: (function () {
		var num = Crypto.util.randomBytes(12)[11];
		return 200 + Math.floor(num);
	})(),

	seedCount: 0, // counter
	lastInputTime: new Date().getTime(),
	seedPoints: [],

	// seed function exists to wait for mouse movement to add more entropy before generating an address
	seed: function (evt) {
		if (!evt) var evt = window.event;
		var timeStamp = new Date().getTime();
		// seeding is over now we generate and display the address
		if (ninja.seeder.seedCount == ninja.seeder.seedLimit) {
			ninja.seeder.seedCount++;
			ninja.wallets.singlewallet.open();
			document.getElementById("generate").style.display = "none";
			document.getElementById("menu").style.visibility = "visible";
			ninja.seeder.removePoints();
		}
		// seed mouse position X and Y when mouse movements are greater than 40ms apart.
		else if ((ninja.seeder.seedCount < ninja.seeder.seedLimit) && evt && (timeStamp - ninja.seeder.lastInputTime) > 40) {
			SecureRandom.seedTime();
			SecureRandom.seedInt16((evt.clientX * evt.clientY));
			ninja.seeder.showPoint(evt.clientX, evt.clientY);
			ninja.seeder.seedCount++;
			ninja.seeder.lastInputTime = new Date().getTime();
			ninja.seeder.showPool();
		}
	},

	// seed function exists to wait for mouse movement to add more entropy before generating an address
	seedKeyPress: function (evt) {
		if (!evt) var evt = window.event;
		// seeding is over now we generate and display the address
		if (ninja.seeder.seedCount == ninja.seeder.seedLimit) {
			ninja.seeder.seedCount++;
			ninja.wallets.singlewallet.open();
			document.getElementById("generate").style.display = "none";
			document.getElementById("menu").style.visibility = "visible";
			ninja.seeder.removePoints();
		}
		// seed key press character
		else if ((ninja.seeder.seedCount < ninja.seeder.seedLimit) && evt.which) {
			var timeStamp = new Date().getTime();
			// seed a bunch (minimum seedLimit) of times
			SecureRandom.seedTime();
			SecureRandom.seedInt8(evt.which);
			var keyPressTimeDiff = timeStamp - ninja.seeder.lastInputTime;
			SecureRandom.seedInt8(keyPressTimeDiff);
			ninja.seeder.seedCount++;
			ninja.seeder.lastInputTime = new Date().getTime();
			ninja.seeder.showPool();
		}
	},

	showPool: function () {
		var poolHex;
		if (SecureRandom.poolCopyOnInit != null) {
			poolHex = Crypto.util.bytesToHex(SecureRandom.poolCopyOnInit);
			document.getElementById("seedpool").innerHTML = poolHex;
			document.getElementById("seedpooldisplay").innerHTML = poolHex;
		}
		else {
			poolHex = Crypto.util.bytesToHex(SecureRandom.pool);
			document.getElementById("seedpool").innerHTML = poolHex;
			document.getElementById("seedpooldisplay").innerHTML = poolHex;
		}
		document.getElementById("mousemovelimit").innerHTML = (ninja.seeder.seedLimit - ninja.seeder.seedCount);
	},

	showPoint: function (x, y) {
		var div = document.createElement("div");
		div.setAttribute("class", "seedpoint");
		div.style.top = y + "px";
		div.style.left = x + "px";
		document.body.appendChild(div);
		ninja.seeder.seedPoints.push(div);
	},

	removePoints: function () {
		for (var i = 0; i < ninja.seeder.seedPoints.length; i++) {
			document.body.removeChild(ninja.seeder.seedPoints[i]);
		}
		ninja.seeder.seedPoints = [];
	}
};

ninja.qrCode = {
	// determine which type number is big enough for the input text length
	getTypeNumber: function (text) {
		var lengthCalculation = text.length * 8 + 12; // length as calculated by the QRCode
		if (lengthCalculation < 72) { return 1; }
		else if (lengthCalculation < 128) { return 2; }
		else if (lengthCalculation < 208) { return 3; }
		else if (lengthCalculation < 288) { return 4; }
		else if (lengthCalculation < 368) { return 5; }
		else if (lengthCalculation < 480) { return 6; }
		else if (lengthCalculation < 528) { return 7; }
		else if (lengthCalculation < 688) { return 8; }
		else if (lengthCalculation < 800) { return 9; }
		else if (lengthCalculation < 976) { return 10; }
		return null;
	},

	createCanvas: function (text, sizeMultiplier, flipper) {
		sizeMultiplier = (sizeMultiplier == undefined) ? 2 : sizeMultiplier; // default 2
		flipper = (flipper == undefined) ? 3 : flipper; // default 3
		// create the qrcode itself
		var typeNumber = ninja.qrCode.getTypeNumber(text);
		var qrcode = new QRCode(typeNumber, QRCode.ErrorCorrectLevel.H);
		qrcode.addData(text);
		qrcode.make();
		var width = qrcode.getModuleCount() * sizeMultiplier;
		var height = qrcode.getModuleCount() * sizeMultiplier;
		// create canvas element
		var canvas = document.createElement('canvas');
		var scale = 10.0;
		canvas.width = width * scale;
		canvas.height = height * scale;
		if (flipper === 3) {
		
			canvas.style.width = 72.5 + 'px';
			canvas.style.height = 72.5 + 'px';
		}
		if (flipper === 1){
		
			canvas.style.width = '<?php echo $qr_pub_w; ?>';
			canvas.style.height = '<?php echo $qr_pub_h; ?>';
		
		}
		
		if (flipper === 2) {
		
			canvas.style.width = '<?php echo $qr_priv_w; ?>';
			canvas.style.height = '<?php echo $qr_priv_h; ?>';
		
		}
		var ctx = canvas.getContext('2d');
		ctx.scale(scale, scale);
		// compute tileW/tileH based on width/height
		var tileW = width / qrcode.getModuleCount();
		var tileH = height / qrcode.getModuleCount();
		// draw in the canvas
		for (var row = 0; row < qrcode.getModuleCount(); row++) {
			for (var col = 0; col < qrcode.getModuleCount(); col++) {
				ctx.fillStyle = qrcode.isDark(row, col) ? "#000000" : "#ffffff";
				ctx.fillRect(col * tileW, row * tileH, tileW, tileH);
			}
		}
		// return just built canvas
		return canvas;
	},

	// generate a QRCode and return it's representation as an Html table 
	createTableHtml: function (text) {
		var typeNumber = ninja.qrCode.getTypeNumber(text);
		var qr = new QRCode(typeNumber, QRCode.ErrorCorrectLevel.H);
		qr.addData(text);
		qr.make();
		var tableHtml = "<table class='qrcodetable'>";
		for (var r = 0; r < qr.getModuleCount(); r++) {
			tableHtml += "<tr>";
			for (var c = 0; c < qr.getModuleCount(); c++) {
				if (qr.isDark(r, c)) {
					tableHtml += "<td class='qrcodetddark'/>";
				} else {
					tableHtml += "<td class='qrcodetdlight'/>";
				}
			}
			tableHtml += "</tr>";
		}
		tableHtml += "</table>";
		return tableHtml;
	},

	// show QRCodes with canvas OR table (IE8)
	// parameter: keyValuePair 
	// example: { "id1": "string1", "id2": "string2"}
	//		"id1" is the id of a div element where you want a QRCode inserted.
	//		"string1" is the string you want encoded into the QRCode.
	showQrCode: function (keyValuePair, sizeMultiplier) {
		var countblah = 0;
		for (var key in keyValuePair) {
			var value = keyValuePair[key];
			try {
				if (document.getElementById(key)) {
					document.getElementById(key).innerHTML = "";
					if (countblah === 1) {
						document.getElementById(key).appendChild(ninja.qrCode.createCanvas(value, sizeMultiplier, 2));
						countblah = 3;
					}
					if (countblah === 0){
						document.getElementById(key).appendChild(ninja.qrCode.createCanvas(value, sizeMultiplier, 1));
						countblah = 1;
					}
				}
			}
			catch (e) {
				// for browsers that do not support canvas (IE8)
				document.getElementById(key).innerHTML = ninja.qrCode.createTableHtml(value);
			}
		}
	}
};

ninja.tabSwitch = function (walletTab) {
	if (walletTab.className.indexOf("selected") == -1) {
		// unselect all tabs
		for (var wType in ninja.wallets) {
			document.getElementById(wType).className = "tab";
			ninja.wallets[wType].close();
		}
		walletTab.className += " selected";
		ninja.wallets[walletTab.getAttribute("id")].open();
	}
};

ninja.getQueryString = function () {
	var result = {}, queryString = location.search.substring(1), re = /([^&=]+)=([^&]*)/g, m;
	while (m = re.exec(queryString)) {
		result[decodeURIComponent(m[1])] = decodeURIComponent(m[2]);
	}
	return result;
};

// use when passing an Array of Functions
ninja.runSerialized = function (functions, onComplete) {
	onComplete = onComplete || function () { };

	if (functions.length === 0) onComplete();
	else {
		// run the first function, and make it call this
		// function when finished with the rest of the list
		var f = functions.shift();
		f(function () { ninja.runSerialized(functions, onComplete); });
	}
};

ninja.forSerialized = function (initial, max, whatToDo, onComplete) {
	onComplete = onComplete || function () { };

	if (initial === max) { onComplete(); }
	else {
		// same idea as runSerialized
		whatToDo(initial, function () { ninja.forSerialized(++initial, max, whatToDo, onComplete); });
	}
};

// use when passing an Object (dictionary) of Functions
ninja.foreachSerialized = function (collection, whatToDo, onComplete) {
	var keys = [];
	for (var name in collection) {
		keys.push(name);
	}
	ninja.forSerialized(0, keys.length, function (i, callback) {
		whatToDo(keys[i], callback);
	}, onComplete);
};
	</script>
	<script type="text/javascript">
ninja.translator = {
	currentCulture: "en",

	translate: function (culture) {
		var dict = ninja.translator.translations[culture];
		if (dict) {
			// set current culture
			ninja.translator.currentCulture = culture;
			// update menu UI
			for (var cult in ninja.translator.translations) {
				document.getElementById("culture" + cult).setAttribute("class", "");
			}
			document.getElementById("culture" + culture).setAttribute("class", "selected");
			// apply translations
			for (var id in dict) {
				if (document.getElementById(id) && document.getElementById(id).value) {
					document.getElementById(id).value = dict[id];
				}
				else if (document.getElementById(id)) {
					document.getElementById(id).innerHTML = dict[id];
				}
			}
		}
	},

	get: function (id) {
		var translation = ninja.translator.translations[ninja.translator.currentCulture][id];
		return translation;
	},

	translations: {
		"en": {
			// javascript alerts or messages
			"testneteditionactivated": "TESTNET EDITION ACTIVATED",
			"paperlabelbitcoinaddress": "Bitcoin Address:",
			"paperlabelprivatekey": "Private Key (Wallet Import Format):",
			"paperlabelencryptedkey": "Encrypted Private Key (Password required)",
			"bulkgeneratingaddresses": "Generating addresses... ",
			"brainalertpassphrasetooshort": "The passphrase you entered is too short.\n\n",
			"brainalertpassphrasewarning": "Warning: Choosing a strong passphrase is important to avoid brute force attempts to guess your passphrase and steal your bitcoins.",
			"brainalertpassphrasedoesnotmatch": "The passphrase does not match the confirm passphrase.",
			"detailalertnotvalidprivatekey": "The text you entered is not a valid Private Key",
			"detailconfirmsha256": "The text you entered is not a valid Private Key!\n\nWould you like to use the entered text as a passphrase and create a Private Key using a SHA256 hash of the passphrase?\n\nWarning: Choosing a strong passphrase is important to avoid brute force attempts to guess your passphrase and steal your bitcoins.",
			"bip38alertincorrectpassphrase": "Incorrect passphrase for this encrypted private key.",
			"bip38alertpassphraserequired": "Passphrase required for BIP38 key",
			"vanityinvalidinputcouldnotcombinekeys": "Invalid input. Could not combine keys.",
			"vanityalertinvalidinputpublickeysmatch": "Invalid input. The Public Key of both entries match. You must input two different keys.",
			"vanityalertinvalidinputcannotmultiple": "Invalid input. Cannot multiply two public keys. Select 'Add' to add two public keys to get a bitcoin address.",
			"vanityprivatekeyonlyavailable": "Only available when combining two private keys",
			"vanityalertinvalidinputprivatekeysmatch": "Invalid input. The Private Key of both entries match. You must input two different keys."
		},

		"es": {
			// javascript alerts or messages
			"testneteditionactivated": "Testnet se activa",
			"paperlabelbitcoinaddress": "DirecciÃ³n Bitcoin:",
			"paperlabelprivatekey": "Clave privada (formato para importar):",
			"paperlabelencryptedkey": "Clave privada cifrada (contraseÃ±a necesaria)",
			"bulkgeneratingaddresses": "GeneraciÃ³n de direcciones... ",
			"brainalertpassphrasetooshort": "La contraseÃ±a introducida es demasiado corta.\n\n",
			"brainalertpassphrasewarning": "Aviso: Es importante escoger una contraseÃ±a fuerte para evitar ataques de fuerza bruta a fin de adivinarla y robar tus bitcoins.",
			"brainalertpassphrasedoesnotmatch": "Las contraseÃ±as no coinciden.",
			"detailalertnotvalidprivatekey": "El texto que has introducido no es una clave privada vÃ¡lida",
			"detailconfirmsha256": "El texto que has introducido no es una clave privada vÃ¡lida\n\nÂ¿Quieres usar ese texto como si fuera una contraseÃ±a y generar una clave privada usando un hash SHA256 de tal contraseÃ±a?\n\nAviso: Es importante escoger una contraseÃ±a fuerte para evitar ataques de fuerza bruta a fin de adivinarla y robar tus bitcoins.",
			"bip38alertincorrectpassphrase": "Incorrect passphrase for this encrypted private key.", //TODO: please translate
			"bip38alertpassphraserequired": "Passphrase required for BIP38 key", //TODO: please translate
			"vanityinvalidinputcouldnotcombinekeys": "Entrada no vÃ¡lida. No se puede combinar llaves.",
			"vanityalertinvalidinputpublickeysmatch": "Entrada no vÃ¡lida. La clave pÃºblica de ambos coincidan entradas. Debe introducir dos claves diferentes.",
			"vanityalertinvalidinputcannotmultiple": "Entrada no vÃ¡lida. No se puede multiplicar dos claves pÃºblicas. Seleccione 'AÃ±adir' para agregar dos claves pÃºblicas para obtener una direcciÃ³n bitcoin.",
			"vanityprivatekeyonlyavailable": "SÃ³lo estÃ¡ disponible cuando se combinan dos claves privadas",
			"vanityalertinvalidinputprivatekeysmatch": "Entrada no vÃ¡lida. La clave privada de ambos coincidan entradas. Debe introducir dos claves diferentes.",

			// header and menu html
			"tagline": "Generador de carteras Bitcoin de cÃ³digo abierto en lado de cliente con Javascript",
			"generatelabelbitcoinaddress": "Generando direcciÃ³n Bitcoin...",
			"generatelabelmovemouse": "Mueve un poco el ratÃ³n para crear entropÃ­a...",
			"generatelabelkeypress": "OR type some random characters into this textbox", //TODO: please translate
			"singlewallet": "Una sola cartera",
			"paperwallet": "Cartera en papel",
			"bulkwallet": "Direcciones en masa",
			"brainwallet": "Cartera mental",
			"vanitywallet": "Cartera personalizada",
			"detailwallet": "Detalles de la cartera",

			// footer html
			"footerlabeldonations": "Donaciones:",
			"footerlabeltranslatedby": "TraducciÃ³n: <b>12345</b>Vypv2QSmuRXcciT5oEB27mPbWGeva",
			"footerlabelpgp": "PGP",
			"footerlabelversion": "HistÃ³rico de versiones",
			"footerlabelgithub": "Repositorio GitHub",
			"footerlabelcopyright1": "Copyright Cryptowallets.org.",
			"footerlabelcopyright2": "Copyright del cÃ³digo JavaScript: en el fuente.",
			"footerlabelnowarranty": "Sin garantÃ­a.",

			// single wallet html
			"newaddress": "Generar direcciÃ³n",
			"singleprint": "Imprimir",
			"singlelabelbitcoinaddress": "DirecciÃ³n Bitcoin",
			"singlelabelprivatekey": "Clave privada (formato para importar):",
			"singletip1": "<b>A Bitcoin wallet</b> is as simple as a single pairing of a Bitcoin address with it's corresponding Bitcoin private key. Such a wallet has been generated for you in your web browser and is displayed above.", //TODO: please translate
			"singletip2": "<b>To safeguard this wallet</b> you must print or otherwise record the Bitcoin address and private key. It is important to make a backup copy of the private key and store it in a safe location. This site does not have knowledge of your private key. If you are familiar with PGP you can download this all-in-one HTML page and check that you have an authentic version from the author of this site by matching the SHA1 hash of this HTML with the SHA1 hash available in the signed version history document linked on the footer of this site. If you leave/refresh the site or press the Generate New Address button then a new private key will be generated and the previously displayed private key will not be retrievable.	Your Bitcoin private key should be kept a secret. Whomever you share the private key with has access to spend all the bitcoins associated with that address. If you print your wallet then store it in a zip lock bag to keep it safe from water. Treat a paper wallet like cash.", //TODO: please translate
			"singletip3": "<b>Add funds</b> to this wallet by instructing others to send bitcoins to your Bitcoin address.", //TODO: please translate
			"singletip4": "<b>Check your balance</b> by going to blockchain.info or blockexplorer.com and entering your Bitcoin address.", //TODO: please translate
			"singletip5": "<b>Spend your bitcoins</b> by going to blockchain.info or mtgox.com and sweep the full balance of your private key into your account at their website. You can also spend your funds by downloading one of the popular bitcoin p2p clients and importing your private key to the p2p client wallet. Keep in mind when you import your single key to a bitcoin p2p client and spend funds your key will be bundled with other private keys in the p2p client wallet. When you perform a transaction your change will be sent to another bitcoin address within the p2p client wallet. You must then backup the p2p client wallet and keep it safe as your remaining bitcoins will be stored there. Satoshi advised that one should never delete a wallet.", //TODO: please translate

			// paper wallet html
			"paperlabelhideart": "Ocultar diseÃ±o",
			"paperlabeladdressesperpage": "Direcciones por pÃ¡gina:",
			"paperlabeladdressestogenerate": "Direcciones en total:",
			"papergenerate": "Generar",
			"paperprint": "Imprimir",
			"paperlabelBIPpassphrase": "Passphrase:", //TODO: please translate
			"paperlabelencrypt": "BIP38 Encrypt?", //TODO: please translate

			// bulk wallet html
			"bulklabelstartindex": "Empezar en:",
			"bulklabelrowstogenerate": "Filas a generar:",
			"bulklabelcompressed": "Compressed addresses?", //TODO: please translate
			"bulkgenerate": "Generar",
			"bulkprint": "Imprimir",
			"bulklabelcsv": "Valores separados por coma:",
			"bulklabelformat": "Ãndice,DirecciÃ³n,Clave privada (formato para importar)",
			"bulklabelq1": "Â¿Por quÃ© debo usar \"Direcciones en masa\" para aceptar Bitcoins en mi web?",
			"bulka1": "La forma tradicional de aceptar bitcoins en tu web requiere tener instalado el cliente oficial de bitcoin (\"bitcoind\"). Sin embargo muchos servicios de hosting no permiten instalar dicho cliente. AdemÃ¡s, ejecutar el cliente en tu servidor supone que las claves privadas estÃ¡n tambiÃ©n en el servidor y podrÃ­an ser comprometidas en caso de intrusiÃ³n. Al usar este mecanismo, puedes subir al servidor sÃ³lo las direcciÃ³n de bitcoin y no las claves privadas. De esta forma no te tienes que preocupar de que alguien robe la cartera si se cuelan en el servidor.",
			"bulklabelq2": "Â¿CÃ³mo uso \"Direcciones en masa\" para aceptar bitcoins en mi web?",
			"bulklabela2li1": "Usa el tab \"Direcciones en masa\" para generar por anticipado muchas direcciones (mÃ¡s de 10000). Copia y pega la lista de valores separados por comas (CSV) a un archivo de texto seguro (cifrado) en tu ordenador. Guarda una copia de seguridad en algÃºn lugar seguro.",
			"bulklabela2li2": "Importa las direcciones en la base de datos de tu servidor. No subas la cartera ni las claves pÃºblicas, o de lo contrario te lo pueden robar. Sube sÃ³lo las direcciones, ya que es lo que se va a mostrar a los clientes.",
			"bulklabela2li3": "Ofrece una alternativa en el carro de la compra de tu web para que los clientes paguen con Bitcoin. Cuando el cliente elija pagar con Bitcoin, les muestras una de las direcciones de la base de datos como su \"direcciÃ³n de pago\" y guardas esto junto con el pedido.",
			"bulklabela2li4": "Ahora te hace falta recibir una notificaciÃ³n del pago. Busca en google \"notificaciÃ³n de pagos bitcoin\" (o \"bitcoin payment notification\" en inglÃ©s) y suscrÃ­bete a alguno de los servicios que aparezcan. Hay varios de ellos, que te pueden notificar vÃ­a Web services, API, SMS, email, etc. Una vez te llegue la notificaciÃ³n, lo cual puede ser automatizado, entonces ya puedes procesar el pedido. Para comprobar a mano si has recibido un pago, puedes usar Block Explorer: reemplaza DIRECCION a continuaciÃ³n por la direcciÃ³n que estÃ©s comprobando. La transacciÃ³n puede tardar entre 10 minutos y una hora en ser confirmada. <br />http://www.blockexplorer.com/address/DIRECCION<br /><br />Puedes ver las transacciones sin confirmar en: http://blockchain.info/ <br />Las transacciones sin confirmar suelen aparecer ahÃ­ en unos 30 segundos.",
			"bulklabela2li5": "Las bitcoins que recibas se almacenarÃ¡n de forma segura en la cadena de bloques. Usa la cartera original que generaste en el paso 1 para usarlas.",

			// brain wallet html
			"brainlabelenterpassphrase": "ContraseÃ±a:",
			"brainlabelshow": "Mostrar",
			"brainprint": "Imprimir",
			"brainlabelconfirm": "Confirmar contraseÃ±a:",
			"brainview": "Ver",
			"brainalgorithm": "Algoritmo: SHA256(contraseÃ±a)",
			"brainlabelbitcoinaddress": "DirecciÃ³n Bitcoin:",
			"brainlabelprivatekey": "Clave privada (formato para importar):",

			// vanity wallet html
			"vanitylabelstep1": "Paso 1 - Genera tu par de claves",
			"vanitynewkeypair": "Generar",
			"vanitylabelstep1publickey": "Clave pÃºblica:",
			"vanitylabelstep1pubnotes": "Copia y pega la lÃ­nea de arriba en el campo \"Your-Part-Public-Key\" de la web de Vanity Pool.",
			"vanitylabelstep1privatekey": "Clave privada:",
			"vanitylabelstep1privnotes": "Copia y pega la clave pÃºblica de arriba en un archivo de texto. Es mejor que lo almacenes en un volumen cifrado. Lo necesitarÃ¡s para recuperar la clave privada una vez Vanity Pool haya encontrado tu prefijo.",
			"vanitylabelstep2calculateyourvanitywallet": "Paso 2 - Calcula tu cartera personalizada",
			"vanitylabelenteryourpart": "Introduce la clave privada generada en el paso 1, y que has guardado:",
			"vanitylabelenteryourpoolpart": "Introduce la clave privada obtenida de la Vanity Pool:",
			"vanitylabelnote1": "[NOTA: esta casilla de entrada puede aceptar una clave pÃºblica o clave privada]",
			"vanitylabelnote2": "[NOTA: esta casilla de entrada puede aceptar una clave pÃºblica o clave privada]",
			"vanitylabelradioadd": "AÃ±adir",
			"vanitylabelradiomultiply": "Multiplicar",
			"vanitycalc": "Calcular cartera personalizada",
			"vanitylabelbitcoinaddress": "DirecciÃ³n Bitcoin personalizada:",
			"vanitylabelnotesbitcoinaddress": "Esta es tu nueva direcciÃ³n, que deberÃ­a tener el prefijo deseado.",
			"vanitylabelpublickeyhex": "Clave pÃºblica personalizada (HEX):",
			"vanitylabelnotespublickeyhex": "Lo anterior es la clave pÃºblica en formato hexadecimal.",
			"vanitylabelprivatekey": "Clave privada personalizada (formato para importar):",
			"vanitylabelnotesprivatekey": "Esto es la clave privada para introducir en tu cartera.",

			// detail wallet html
			"detaillabelenterprivatekey": "Introduce la clave privada",
			"detailkeyformats": "Key Formats: WIF, WIFC, HEX, B64, B6, MINI, BIP38",
			"detailview": "Ver detalles",
			"detailprint": "Imprimir",
			"detaillabelnote1": "Tu clave privada es un nÃºmero secreto, Ãºnico, que sÃ³lo tÃº conoces. Se puede expresar en varios formatos. AquÃ­ abajo mostramos la direcciÃ³n y la clave pÃºblica que se corresponden con tu clave privada, asÃ­ como la clave privada en los formatos mÃ¡s conocidos (para importar, hex, base64 y mini).",
			"detaillabelnote2": "Bitcoin v0.6+ almacena las claves pÃºblicas comprimidas. El cliente tambiÃ©n soporta importar/exportar claves privadas usando importprivkey/dumpprivkey. El formato de las claves privadas exportadas depende de si la direcciÃ³n se generÃ³ en una cartera antigua o nueva.",
			"detaillabelbitcoinaddress": "DirecciÃ³n Bitcoin:",
			"detaillabelbitcoinaddresscomp": "DirecciÃ³n Bitcoin (comprimida):",
			"detaillabelpublickey": "Clave pÃºblica (130 caracteres [0-9A-F]):",
			"detaillabelpublickeycomp": "Clave pÃºblica (comprimida, 66 caracteres [0-9A-F]):",
			"detaillabelprivwif": "Clave privada para importar (51 caracteres en base58, empieza con un",
			"detaillabelprivwifcomp": "Clave privada para importar (comprimida, 52 caracteres en base58, empieza con",
			"detailcompwifprefix": "'K' o 'L'",
			"detaillabelprivhex": "Clave privada en formato hexadecimal (64 caracteres [0-9A-F]):",
			"detaillabelprivb64": "Clave privada en base64 (44 caracteres):",
			"detaillabelprivmini": "Clave privada en formato mini (22, 26 o 30 caracteres, empieza por 'S'):",
			"detaillabelpassphrase": "BIP38 Passphrase", //TODO: please translate
			"detaildecrypt": "Decrypt BIP38", //TODO: please translate
			"detaillabelq1": "How do I make a wallet using dice? What is B6?", //TODO: please translate
			"detaila1": "An important part of creating a Bitcoin wallet is ensuring the random numbers used to create the wallet are truly random. Physical randomness is better than computer generated pseudo-randomness. The easiest way to generate physical randomness is with dice. To create a Bitcoin private key you only need one six sided die which you roll 99 times. Stopping each time to record the value of the die. When recording the values follow these rules: 1=1, 2=2, 3=3, 4=4, 5=5, 6=0. By doing this you are recording the big random number, your private key, in B6 or base 6 format. You can then enter the 99 character base 6 private key into the text field above and click View Details. You will then see the Bitcoin address associated with your private key. You should also make note of your private key in WIF format since it is more widely used." //TODO: please translate
		},

		"fr": {
			// javascript alerts or messages
			"testneteditionactivated": "Ã‰DITION TESTNET ACTIVÃ‰E",
			"paperlabelbitcoinaddress": "Adresse Bitcoin:",
			"paperlabelprivatekey": "ClÃ© PrivÃ©e (Format d'importation de porte-monnaie):",
			"paperlabelencryptedkey": "Encrypted Private Key (Password required)", //TODO: please translate
			"bulkgeneratingaddresses": "CrÃ©ation de l'adresse... ",
			"brainalertpassphrasetooshort": "Le mot de passe que vous avez entrÃ© est trop court.\n\n",
			"brainalertpassphrasewarning": "Attention: Choisir un mot de passe solide est important pour vous protÃ©ger des attaques bruteforce visant Ã  trouver votre mot de passe et voler vos Bitcoins.",
			"brainalertpassphrasedoesnotmatch": "Le mot de passe ne correspond pas au mot de passe de vÃ©rification.",
			"detailalertnotvalidprivatekey": "Le texte que vous avez entrÃ© n'est pas une ClÃ© PrivÃ©e valide",
			"detailconfirmsha256": "Le texte que vous avez entrÃ© n'est pas une ClÃ© PrivÃ©e valide!\n\nVoulez-vous utiliser le texte comme un mot de passe et crÃ©er une ClÃ© PrivÃ©e Ã  partir d'un hash SHA256 de ce mot de passe?\n\nAttention: Choisir un mot de passe solide est important pour vous protÃ©ger des attaques bruteforce visant Ã  trouver votre mot de passe et voler vos Bitcoins.",
			"bip38alertincorrectpassphrase": "Incorrect passphrase for this encrypted private key.", //TODO: please translate
			"bip38alertpassphraserequired": "Passphrase required for BIP38 key", //TODO: please translate
			"vanityinvalidinputcouldnotcombinekeys": "EntrÃ©e non valide. Impossible de combiner les clÃ©s.",
			"vanityalertinvalidinputpublickeysmatch": "EntrÃ©e non valide. La clÃ© publique des deux entrÃ©es est identique. Vous devez entrer deux clÃ©s diffÃ©rentes.",
			"vanityalertinvalidinputcannotmultiple": "EntrÃ©e non valide. Il n'est pas possible de multiplier deux clÃ©s publiques. SÃ©lectionner 'Ajouter' pour ajouter deux clÃ©s publiques pour obtenir une adresse Bitcoin.",
			"vanityprivatekeyonlyavailable": "Seulement disponible si vos combinez deux clÃ©s privÃ©es",
			"vanityalertinvalidinputprivatekeysmatch": "EntrÃ©e non valide. La clÃ© PrivÃ©e des deux entrÃ©es est identique. Vous devez entrer deux clÃ©s diffÃ©rentes.",
			
			// header and menu html
			"tagline": "GÃ©nÃ©rateur De Porte-Monnaie Bitcoin Javascript Hors-Ligne",
			"generatelabelbitcoinaddress": "CrÃ©ation de l'adresse Bitcoin...",
			"generatelabelmovemouse": "BOUGEZ votre souris pour ajouter de l'entropie...",
			"generatelabelkeypress": "OR type some random characters into this textbox", //TODO: please translate
			"singlewallet": "Porte-Monnaie Simple",
			"paperwallet": "Porte-Monnaie Papier",
			"bulkwallet": "Porte-Monnaie En Vrac",
			"brainwallet": "Porte-Monnaie Cerveau",
			"vanitywallet": "Porte-Monnaie VanitÃ©",
			"detailwallet": "DÃ©tails du Porte-Monnaie",
			
			// footer html
			"footerlabeldonations": "Dons:",
			"footerlabeltranslatedby": "Traduction: 1Gy7NYSJNUYqUdXTBow5d7bCUEJkUFDFSq",
			"footerlabelpgp": "PGP",
			"footerlabelversion": "Historique De Version",
			"footerlabelgithub": "DÃ©pÃ´t GitHub",
			"footerlabelcopyright1": "Copyright Cryptowallets.org.",
			"footerlabelcopyright2": "Les droits d'auteurs JavaScript sont inclus dans le code source.",
			"footerlabelnowarranty": "Aucune garantie.",
			
			// single wallet html
			"newaddress": "GÃ©nÃ©rer Une Nouvelle Adresse",
			"singleprint": "Imprimer",
			"singlelabelbitcoinaddress": "Adresse Bitcoin:",
			"singlelabelprivatekey": "ClÃ© PrivÃ©e (Format d'importation de porte-monnaie):",
			"singletip1": "<b>A Bitcoin wallet</b> is as simple as a single pairing of a Bitcoin address with it's corresponding Bitcoin private key. Such a wallet has been generated for you in your web browser and is displayed above.", //TODO: please translate
			"singletip2": "<b>To safeguard this wallet</b> you must print or otherwise record the Bitcoin address and private key. It is important to make a backup copy of the private key and store it in a safe location. This site does not have knowledge of your private key. If you are familiar with PGP you can download this all-in-one HTML page and check that you have an authentic version from the author of this site by matching the SHA1 hash of this HTML with the SHA1 hash available in the signed version history document linked on the footer of this site. If you leave/refresh the site or press the Generate New Address button then a new private key will be generated and the previously displayed private key will not be retrievable.	Your Bitcoin private key should be kept a secret. Whomever you share the private key with has access to spend all the bitcoins associated with that address. If you print your wallet then store it in a zip lock bag to keep it safe from water. Treat a paper wallet like cash.", //TODO: please translate
			"singletip3": "<b>Add funds</b> to this wallet by instructing others to send bitcoins to your Bitcoin address.", //TODO: please translate
			"singletip4": "<b>Check your balance</b> by going to blockchain.info or blockexplorer.com and entering your Bitcoin address.", //TODO: please translate
			"singletip5": "<b>Spend your bitcoins</b> by going to blockchain.info or mtgox.com and sweep the full balance of your private key into your account at their website. You can also spend your funds by downloading one of the popular bitcoin p2p clients and importing your private key to the p2p client wallet. Keep in mind when you import your single key to a bitcoin p2p client and spend funds your key will be bundled with other private keys in the p2p client wallet. When you perform a transaction your change will be sent to another bitcoin address within the p2p client wallet. You must then backup the p2p client wallet and keep it safe as your remaining bitcoins will be stored there. Satoshi advised that one should never delete a wallet.", //TODO: please translate

			// paper wallet html
			"paperlabelhideart": "Retirer Le Style?",
			"paperlabeladdressesperpage": "Adresses par page:",
			"paperlabeladdressestogenerate": "Nombre d'adresses Ã  crÃ©er:",
			"papergenerate": "GÃ©nÃ©rer",
			"paperprint": "Imprimer",
			"paperlabelBIPpassphrase": "Passphrase:", //TODO: please translate
			"paperlabelencrypt": "BIP38 Encrypt?", //TODO: please translate

			// bulk wallet html
			"bulklabelstartindex": "Commencer Ã  l'index:",
			"bulklabelrowstogenerate": "Colonnes Ã  gÃ©nÃ©rer:",
			"bulklabelcompressed": "Compressed addresses?", //TODO: please translate
			"bulkgenerate": "GÃ©nÃ©rer",
			"bulkprint": "Imprimer",
			"bulklabelcsv": "Valeurs SÃ©parÃ©es Par Des Virgules (CSV):",
			"bulklabelformat": "Index,Adresse,ClÃ© PrivÃ©e (WIF)",
			"bulklabelq1": "Pourquoi utiliserais-je un Porte-monnaie en vrac pour accepter les Bitcoins sur mon site web?",
			"bulka1": "L'approche traditionnelle pour accepter des Bitcoins sur votre site web requiÃ¨re l'installation du logiciel Bitcoin officiel (\"bitcoind\"). Plusieurs hÃ©bergeurs ne supportent pas l'installation du logiciel Bitcoin. De plus, faire fonctionner le logiciel Bitcoin sur votre serveur web signifie que vos clÃ©s privÃ©es sont hÃ©bergÃ©es sur le serveur et pourraient donc Ãªtre volÃ©es si votre serveur web Ã©tait compromis. En utilisant un Porte-monnaie en vrac, vous pouvez publiquer seulement les adresses Bitcoin sur votre serveur et non les clÃ©s privÃ©es. Vous n'avez alors pas Ã  vous inquiÃ©ter du risque de vous faire voler votre porte-monnaie si votre serveur Ã©tait compromis.",
			"bulklabelq2": "Comment utiliser le Porte-monnaie en vrac pour utiliser le Bitcoin sur mon site web?",
			"bulklabela2li1": "Utilisez le Porte-monnaie en vrac pour prÃ©-gÃ©nÃ©rer une large quantitÃ© d'adresses Bitcoin (10,000+). Copiez collez les donnÃ©es sÃ©parÃ©es par des virgules (CSV) dans un fichier texte sÃ©curisÃ© dans votre ordinateur. Sauvegardez ce fichier dans un endroit sÃ©curisÃ©.",
			"bulklabela2li2": "Importez les adresses Bitcoin dans une base de donnÃ©e sur votre serveur web. (N'ajoutez pas le porte-monnaie ou les clÃ©s privÃ©es sur votre serveur web, sinon vous courrez le risque de vous faire voler si votre serveur est compromis. Ajoutez seulement les adresses Bitcoin qui seront visibles Ã  vos visiteurs.)",
			"bulklabela2li3": "Ajoutez une option dans votre panier en ligne pour que vos clients puissent vous payer en Bitcoin. Quand un client choisi de vous payer en Bitcoin, vous pouvez afficher une des adresses de votre base de donnÃ©e comme \"adresse de paiment\" pour votre client et sauvegarder cette adresse avec sa commande.",
			"bulklabela2li4": "Vous avez maintenant besoin d'Ãªtre avisÃ© quand le paiement est reÃ§u. Cherchez \"bitcoin payment notification\" sur Google et inscrivez-vous Ã  un service de notification de paiement Bitcoin. Il y a plusieurs services qui vous avertiront via des services Web, API, SMS, Email, etc. Une fois que vous avez reÃ§u la notification, qui devrait Ãªtre programmÃ©e automatiquement, vous pouvez traiter la commande de votre client. Pour vÃ©rifier manuellement si un paiement est arrivÃ©, vous pouvez utiliser Block Explorer. Remplacez ADRESSE par l'adresse Bitcoin que vous souhaitez vÃ©rifier. La confirmation de la transaction pourrait prendre de 10 Ã  60 minutes pour Ãªtre confirmÃ©e.<br />http://www.blockexplorer.com/address/ADRESSE<br /><br />Les transactions non confirmÃ©es peuvent Ãªtre visualisÃ©es ici: http://blockchain.info/ <br />Vous devriez voir la transaction Ã  l'intÃ©rieur de 30 secondes.",
			"bulklabela2li5": "Les Bitcoins vos s'accumuler de faÃ§on sÃ©curitaire dans la chaÃ®ne de blocs. Utilisez le porte-monnaie original que vous avez gÃ©nÃ©rÃ© Ã  l'Ã©tape 1 pour les dÃ©penser.",
			
			// brain wallet html
			"brainlabelenterpassphrase": "Entrez votre mot de passe: ",
			"brainlabelshow": "Afficher?",
			"brainprint": "Imprimer",
			"brainlabelconfirm": "Confirmer le mot de passe: ",
			"brainview": "Visualiser",
			"brainalgorithm": "Algorithme: SHA256(mot de passe)",
			"brainlabelbitcoinaddress": "Adresse Bitcoin:",
			"brainlabelprivatekey": "ClÃ© PrivÃ©e (Format d'importation de porte-monnaie):",

			// vanity wallet html
			"vanitylabelstep1": "Ã‰tape 1 - GÃ©nÃ©rer votre \"Ã‰tape 1 Paire De ClÃ©s\"",
			"vanitynewkeypair": "GÃ©nÃ©rer",
			"vanitylabelstep1publickey": "Ã‰tape 1 ClÃ© Publique:",
			"vanitylabelstep1pubnotes": "Copiez celle-ci dans la case Votre-ClÃ©-Publique du site de Vanity Pool.",
			"vanitylabelstep1privatekey": "Step 1 ClÃ© PrivÃ©e:",
			"vanitylabelstep1privnotes": "Copiez la cette ClÃ© PrivÃ©e dans un fichier texte. IdÃ©alement, sauvegardez la dans un fichier encryptÃ©. Vous en aurez besoin pour rÃ©cupÃ©rer la ClÃ© PrivÃ©e lors que Vanity Pool aura trouvÃ© votre prÃ©fixe.",
			"vanitylabelstep2calculateyourvanitywallet": "Ã‰tape 2 - Calculer votre Porte-monnaie VanitÃ©",
			"vanitylabelenteryourpart": "Entrez votre ClÃ© PrivÃ©e (gÃ©nÃ©rÃ©e Ã  l'Ã©tape 1 plus haut et prÃ©cÃ©demment sauvegardÃ©e):",
			"vanitylabelenteryourpoolpart": "Entrez la ClÃ© PrivÃ©e (provenant de Vanity Pool):",
			"vanitylabelnote1": "[NOTE: cette case peut accepter une clÃ© publique ou un clÃ© privÃ©e]",
			"vanitylabelnote2": "[NOTE: cette case peut accepter une clÃ© publique ou un clÃ© privÃ©e]",
			"vanitylabelradioadd": "Ajouter",
			"vanitylabelradiomultiply": "Multiplier",
			"vanitycalc": "Calculer Le Porte-monnaie VanitÃ©",
			"vanitylabelbitcoinaddress": "Adresse Bitcoin VanitÃ©:",
			"vanitylabelnotesbitcoinaddress": "Ci-haut est votre nouvelle adresse qui devrait inclure le prÃ©fix requis.",
			"vanitylabelpublickeyhex": "ClÃ© Public VanitÃ© (HEX):",
			"vanitylabelnotespublickeyhex": "Celle-ci est la ClÃ© Publique dans le format hexadÃ©cimal. ",
			"vanitylabelprivatekey": "ClÃ© PrivÃ©e VanitÃ© (WIF):",
			"vanitylabelnotesprivatekey": "Celle-ci est la ClÃ© PrivÃ©e pour accÃ©der Ã  votre porte-monnaie. ",
			
			// detail wallet html
			"detaillabelenterprivatekey": "Entrez la ClÃ© PrivÃ©e",
			"detailkeyformats": "Key Formats: WIF, WIFC, HEX, B64, B6, MINI, BIP38",
			"detailview": "Voir les dÃ©tails",
			"detailprint": "Imprimer",
			"detaillabelnote1": "Votre ClÃ© PrivÃ©e Bitcoin est un nombre secret que vous Ãªtes le seul Ã  connaÃ®tre. Il peut Ãªtre encodÃ© sous la forme d'un nombre sous diffÃ©rents formats. Ci-bas, nous affichons l'adresse Bitcoin et la ClÃ© Publique qui corresponds Ã  la ClÃ© PrivÃ©e ainsi que la ClÃ© PrivÃ©e dans les formats d'encodage les plus populaires (WIF, WIFC, HEX, B64, MINI).",
			"detaillabelnote2": "Bitcoin v0.6+ conserve les clÃ©s publiques dans un format compressÃ©. Le logiciel supporte maintenant aussi l'importation et l'exportation de clÃ©s privÃ©es avec importprivkey/dumpprivkey. Le format de la clÃ© privÃ©e exportÃ©e est dÃ©terminÃ© selon la version du porte-monnaie Bitcoin.",
			"detaillabelbitcoinaddress": "Adresse Bitcoin:",
			"detaillabelbitcoinaddresscomp": "Adresse Bitcoin (compressÃ©e):",
			"detaillabelpublickey": "ClÃ© Publique (130 caractÃ¨res [0-9A-F]):",
			"detaillabelpublickeycomp": "ClÃ© Publique (compressÃ©e, 66 caractÃ¨res [0-9A-F]):",
			"detaillabelprivwif": "ClÃ© PrivÃ©e WIF (51 caractÃ¨res base58, dÃ©bute avec un a",
			"detaillabelprivwifcomp": "ClÃ© PrivÃ©e WIF (compressÃ©e, 52 caractÃ¨res base58, dÃ©bute avec un a",
			"detailcompwifprefix": "'K' ou 'L'",
			"detaillabelprivhex": "ClÃ© PrivÃ©e Format Hexadecimal (64 caractÃ¨res [0-9A-F]):",
			"detaillabelprivb64": "ClÃ© PrivÃ©e Base64 (44 caractÃ¨res):",
			"detaillabelprivmini": "ClÃ© PrivÃ©e Format Mini (22, 26 ou 30 caractÃ¨res, dÃ©bute avec un 'S'):",
			"detaillabelpassphrase": "BIP38 Passphrase", //TODO: please translate
			"detaildecrypt": "Decrypt BIP38", //TODO: please translate
			"detaillabelq1": "How do I make a wallet using dice? What is B6?", //TODO: please translate
			"detaila1": "An important part of creating a Bitcoin wallet is ensuring the random numbers used to create the wallet are truly random. Physical randomness is better than computer generated pseudo-randomness. The easiest way to generate physical randomness is with dice. To create a Bitcoin private key you only need one six sided die which you roll 99 times. Stopping each time to record the value of the die. When recording the values follow these rules: 1=1, 2=2, 3=3, 4=4, 5=5, 6=0. By doing this you are recording the big random number, your private key, in B6 or base 6 format. You can then enter the 99 character base 6 private key into the text field above and click View Details. You will then see the Bitcoin address associated with your private key. You should also make note of your private key in WIF format since it is more widely used." //TODO: please translate
		},

		"el": {
			// javascript alerts or messages
			"testneteditionactivated": "Î•ÎÎ•Î¡Î“Î— Î•ÎšÎ”ÎŸÎ£Î— TESTNET",
			"paperlabelbitcoinaddress": "Î”Î¹ÎµÏÎ¸Ï…Î½ÏƒÎ· Bitcoin:",
			"paperlabelprivatekey": "Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯ (ÎœÎ¿ÏÏ†Î® ÎµÎ¹ÏƒÎ±Î³Ï‰Î³Î®Ï‚ ÏƒÎµ Ï€Î¿ÏÏ„Î¿Ï†ÏŒÎ»Î¹):",
			"paperlabelencryptedkey": "Encrypted Private Key (Password required)", //TODO: please translate
			"bulkgeneratingaddresses": "Î”Î·Î¼Î¹Î¿Ï…ÏÎ³Î¯Î± Î´Î¹ÎµÏ…Î¸ÏÎ½ÏƒÎµÏ‰Î½... ",
			"brainalertpassphrasetooshort": "Î— Ï†ÏÎ¬ÏƒÎ· ÎºÏ‰Î´Î¹ÎºÏŒÏ‚ Ï€Î¿Ï… Î´ÏŽÏƒÎ±Ï„Îµ ÎµÎ¯Î½Î±Î¹ Ï€Î¿Î»Ï Î±Î´ÏÎ½Î±Î¼Î·.\n\n",
			"brainalertpassphrasewarning": "Î ÏÎ¿ÏƒÎ¿Ï‡Î®: Î•Î¯Î½Î±Î¹ ÏƒÎ·Î¼Î±Î½Ï„Î¹ÎºÏŒ Î½Î± ÎµÏ€Î¹Î»Î­Î¾ÎµÏ„Îµ Î¼Î¹Î± Î¹ÏƒÏ‡Ï…ÏÎ® Ï†ÏÎ¬ÏƒÎ· ÎºÏ‰Î´Î¹ÎºÏŒ Ï€Î¿Ï… Î¸Î± ÏƒÎ±Ï‚ Ï€ÏÎ¿Ï†Ï…Î»Î¬Î¾ÎµÎ¹ Î±Ï€ÏŒ Î±Ï€ÏŒÏ€ÎµÎ¹ÏÎµÏ‚ Ï€Î±ÏÎ±Î²Î¯Î±ÏƒÎ®Ï‚ Ï„Î·Ï‚ Ï„ÏÏ€Î¿Ï… brute force ÎºÎ±Î¹ ÎºÎ»Î¿Ï€Î® Ï„Ï‰Î½ bitcoins ÏƒÎ±Ï‚.",
			"brainalertpassphrasedoesnotmatch": "Î— Ï†ÏÎ¬ÏƒÎ· ÎºÏ‰Î´Î¹ÎºÏŒÏ‚ ÎºÎ±Î¹ Î· ÎµÏ€Î¹Î²ÎµÎ²Î±Î¯Ï‰ÏƒÎ· Ï„Î·Ï‚ Î´Îµ ÏƒÏ…Î¼Ï†Ï‰Î½Î¿ÏÎ½.",
			"detailalertnotvalidprivatekey": "Î¤Î¿ ÎºÎµÎ¯Î¼ÎµÎ½Î¿ Ï€Î¿Ï… ÎµÎ¹ÏƒÎ¬Î³Î±Ï„Îµ Î´ÎµÎ½ Î±Î½Ï„Î¹ÏƒÏ„Î¿Î¹Ï‡ÎµÎ¯ ÏƒÎµ Î­Î³ÎºÏ…ÏÎ¿ Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯",
			"detailconfirmsha256": "Î¤Î¿ ÎºÎµÎ¯Î¼ÎµÎ½Î¿ Ï€Î¿Ï… ÎµÎ¹ÏƒÎ¬Î³Î±Ï„Îµ Î´ÎµÎ½ Î±Î½Ï„Î¹ÏƒÏ„Î¿Î¹Ï‡ÎµÎ¯ ÏƒÎµ Î­Î³ÎºÏ…ÏÎ¿ Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯!\n\nÎ˜Î± Î¸Î­Î»Î±Ï„Îµ Î½Î± Ï‡ÏÎ·ÏƒÎ¹Î¼Î¿Ï€Î¿Î¹Î·Î¸ÎµÎ¯ Ï„Î¿ ÎºÎµÎ¯Î¼ÎµÎ½Î¿ Ï‰Ï‚ ÎºÏ‰Î´Î¹ÎºÏŒÏ‚ Î³Î¹Î± Ï„Î· Î´Î·Î¼Î¹Î¿Ï…ÏÎ³Î¯Î± ÎµÎ½ÏŒÏ‚ Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÎ¿Ï ÎšÎ»ÎµÎ¹Î´Î¹Î¿Ï Ï€Î¿Ï… Î¸Î± Î´Î·Î¼Î¹Î¿Ï…ÏÎ³Î·Î¸ÎµÎ¯ Î±Ï€ÏŒ Ï„Î¿ SHA265 hash Ï„Î·Ï‚ Ï†ÏÎ¬ÏƒÎ·Ï‚ ÎºÏ‰Î´Î¹ÎºÎ¿Ï;\n\nÎ ÏÎ¿ÏƒÎ¿Ï‡Î®: Î•Î¯Î½Î±Î¹ ÏƒÎ·Î¼Î±Î½Ï„Î¹ÎºÏŒ Î½Î± ÎµÏ€Î¹Î»Î­Î¾ÎµÏ„Îµ Î­Î½Î±Î½ Î¹ÏƒÏ‡Ï…ÏÏŒ ÎºÏ‰Î´Î¹ÎºÏŒ ÏŽÏƒÏ„Îµ Î½Î± ÎµÎ¯Î½Î±Î¹ Î´ÏÏƒÎºÎ¿Î»Î¿ Î½Î± Ï„Î¿Î½ Î¼Î±Î½Ï„Î­ÏˆÎµÎ¹ ÎºÎ¬Ï€Î¿Î¹Î¿Ï‚ ÎºÎ±Î¹ Î½Î± ÎºÎ»Î­ÏˆÎµÎ¹ Ï„Î± bitcoins ÏƒÎ±Ï‚.",
			"bip38alertincorrectpassphrase": "Î›Î¬Î¸Î¿Ï‚ Ï†ÏÎ¬ÏƒÎ· ÎºÏ‰Î´Î¹ÎºÏŒÏ‚ Î±Ï€Î¿ÎºÏÏ…Ï€Ï„Î¿Î³ÏÎ¬Ï†Î·ÏƒÎ·Ï‚ Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÎ¿Ï ÎšÎ»ÎµÎ¹Î´Î¹Î¿Ï.",
			"bip38alertpassphraserequired": "Î‘Ï€Î±Î¹Ï„ÎµÎ¯Ï„Î±Î¹ Î· Ï†ÏÎ¬ÏƒÎ· ÎºÏ‰Î´Î¹ÎºÏŒÏ‚ Î³Î¹Î± Ï„Î¿ ÎšÎ»ÎµÎ¹Î´Î¯ BIP38",
			"vanityinvalidinputcouldnotcombinekeys": "ÎœÎ· Î­Î³ÎºÏ…ÏÎ· ÎµÎ¹ÏƒÎ±Î³Ï‰Î³Î®. ÎŸ ÏƒÏ…Î½Î´Ï…Î±ÏƒÎ¼ÏŒÏ‚ Ï„Ï‰Î½ ÎºÎ»ÎµÎ¹Î´Î¹ÏŽÎ½ ÎµÎ¯Î½Î±Î¹ Î±Î´ÏÎ½Î±Ï„Î¿Ï‚.",
			"vanityalertinvalidinputpublickeysmatch": "ÎœÎ· Î­Î³ÎºÏ…ÏÎ· ÎµÎ¹ÏƒÎ±Î³Ï‰Î³Î®. Î¤Î± Î”Î·Î¼ÏŒÏƒÎ¹Î± ÎšÎ»ÎµÎ¹Î´Î¹Î¬ Ï„Ï‰Î½ Î´ÏÎ¿ ÎµÎ³Î³ÏÎ±Ï†ÏŽÎ½ ÎµÎ¯Î½Î±Î¹ ÏŒÎ¼Î¿Î¹Î±. Î ÏÎ­Ï€ÎµÎ¹ Î½Î± ÎµÎ¹ÏƒÎ¬Î³ÎµÏ„Îµ Î´ÏÎ¿ Î´Î¹Î±Ï†Î¿ÏÎµÏ„Î¹ÎºÎ¬ ÎšÎ»ÎµÎ¹Î´Î¹Î¬.",
			"vanityalertinvalidinputcannotmultiple": "ÎœÎ· Î­Î³ÎºÏ…ÏÎ· ÎµÎ¹ÏƒÎ±Î³Ï‰Î³Î®. Î”ÎµÎ½ ÎµÎ¯Î½Î±Î¹ Î´Ï…Î½Î±Ï„ÏŒÏ‚ Î¿ Ï€Î¿Î»Î»Î±Ï€Î»Î±ÏƒÎ¹Î±ÏƒÎ¼ÏŒÏ‚ Î´ÏÎ¿ Î”Î·Î¼ÏŒÏƒÎ¹Ï‰Î½ ÎšÎ»ÎµÎ¹Î´Î¹ÏŽÎ½. Î•Ï€Î¹Î»Î­Î¾Ï„Îµ 'Î ÏÏŒÏƒÎ¸ÎµÏƒÎ·' Î³Î¹Î± Î½Î± Ï€ÏÎ¿ÏƒÎ¸Î­ÏƒÎµÏ„Îµ Î´ÏÎ¿ Î”Î·Î¼ÏŒÏƒÎ¹Î± ÎšÎ»ÎµÎ¹Î´Î¹Î¬ Î³Î¹Î± Î´Î·Î¼Î¹Î¿Ï…ÏÎ³Î¯Î± Î¼Î¯Î±Ï‚ Î”Î¹ÎµÏÎ¸Ï…Î½ÏƒÎ·Ï‚ Bitcoin.",
			"vanityprivatekeyonlyavailable": "Î”Î¹Î±Î¸Î­ÏƒÎ¹Î¼Î¿ Î¼ÏŒÎ½Î¿ ÎºÎ±Ï„Î¬ Ï„Î¿ ÏƒÏ…Î½Î´Ï…Î±ÏƒÎ¼ÏŒ Î´ÏÎ¿ Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŽÎ½ ÎšÎ»ÎµÎ¹Î´Î¹ÏŽÎ½",
			"vanityalertinvalidinputprivatekeysmatch": "ÎœÎ· Î­Î³ÎºÏ…ÏÎ· ÎµÎ¹ÏƒÎ±Î³Ï‰Î³Î®. Î¤Î± Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÎ¬ ÎšÎ»ÎµÎ¹Î´Î¹Î¬ Ï„Ï‰Î½ Î´ÏÎ¿ ÎµÎ³Î³ÏÎ±Ï†ÏŽÎ½ ÎµÎ¯Î½Î±Î¹ ÏŒÎ¼Î¿Î¹Î±. Î ÏÎ­Ï€ÎµÎ¹ Î½Î± ÎµÎ¹ÏƒÎ¬Î³ÎµÏ„Îµ Î´ÏÎ¿ Î´Î¹Î±Ï†Î¿ÏÎµÏ„Î¹ÎºÎ¬ ÎšÎ»ÎµÎ¹Î´Î¹Î¬.",

			// header and menu html
			"tagline": "Î”Î·Î¼Î¹Î¿Ï…ÏÎ³ÏŒÏ‚ Î”Î¹ÎµÏ…Î¸ÏÎ½ÏƒÎµÏ‰Î½ Bitcoin, Î±Î½Î¿Î¹ÎºÏ„Î¿Ï ÎºÏŽÎ´Î¹ÎºÎ± Javascript",
			"generatelabelbitcoinaddress": "Î”Î·Î¼Î¹Î¿Ï…ÏÎ³Î¯Î± Î”Î¹ÎµÏÎ¸Ï…Î½ÏƒÎ·Ï‚ Bitcoin...",
			"generatelabelmovemouse": "ÎšÎŸÎ¥ÎÎ—Î£Î¤Î• Ï„Î¿ Ï€Î¿Î½Ï„Î¯ÎºÎ¹ Ï„ÏÎ¹Î³ÏÏÏ‰ Î³Î¹Î± Î½Î± Ï€ÏÎ¿ÏƒÎ¸Î­ÏƒÎµÏ„Îµ ÎµÏ€Î¹Ï€Î»Î­Î¿Î½ Ï„Ï…Ï‡Î±Î¹ÏŒÏ„Î·Ï„Î±...",
			"generatelabelkeypress": "OR type some random characters into this textbox", //TODO: please translate
			"singlewallet": "Î‘Ï€Î»ÏŒ Î Î¿ÏÏ„Î¿Ï†ÏŒÎ»Î¹",
			"paperwallet": "Î§Î¬ÏÏ„Î¹Î½Î¿ Î Î¿ÏÏ„Î¿Ï†ÏŒÎ»Î¹",
			"bulkwallet": "Î Î¿Î»Î»Î±Ï€Î»Î¬ Î Î¿ÏÏ„Î¿Ï†ÏŒÎ»Î¹Î±",
			"brainwallet": "ÎœÎ½Î·Î¼Î¿Î½Î¹ÎºÏŒ Î Î¿ÏÏ„Î¿Ï†ÏŒÎ»Î¹",
			"vanitywallet": "Î Î¿ÏÏ„Î¿Ï†ÏŒÎ»Î¹ Vanity",
			"detailwallet": "Î›ÎµÏ€Ï„Î¿Î¼Î­ÏÎµÎ¹ÎµÏ‚ Î Î¿ÏÏ„Î¿Ï†Î¿Î»Î¹Î¿Ï",

			// footer html
			"footerlabeldonations": "Î”Ï‰ÏÎµÎ­Ï‚:",
			"footerlabeltranslatedby": "ÎœÎµÏ„Î¬Ï†ÏÎ±ÏƒÎ·: <a href='http://BitcoinX.gr/'><b>BitcoinX.gr</b></a> 1BitcoiNxkUPcTFxwMqxhRiPEiQRzYskf6",
			"footerlabelpgp": "PGP",
			"footerlabelversion": "Î¹ÏƒÏ„Î¿ÏÎ¹ÎºÏŒ ÎµÎºÎ´ÏŒÏƒÎµÏ‰Î½",
			"footerlabelgithub": "Î‘Ï€Î¿Î¸ÎµÏ„Î®ÏÎ¹Î¿ GitHub",
			"footerlabelcopyright1": "Copyright Cryptowallets.org.",
			"footerlabelcopyright2": "Î¤Î± Ï€Î½ÎµÏ…Î¼Î±Ï„Î¹ÎºÎ¬ Î´Î¹ÎºÎ±Î¹ÏŽÎ¼Î±Ï„Î± Ï„Î·Ï‚ JavaScript Ï€ÎµÏÎ¹Î»Î±Î¼Î²Î¬Î½Î¿Î½Ï„Î±Î¹ ÏƒÏ„Î¿Î½ ÎºÏŽÎ´Î¹ÎºÎ±.",
			"footerlabelnowarranty": "ÎšÎ±Î¼Î¯Î± ÎµÎ³Î³ÏÎ·ÏƒÎ·.",

			// single wallet html
			"newaddress": "Î”Î·Î¼Î¹Î¿Ï…ÏÎ³Î¯Î± Î¼Î¹Î±Ï‚ Î½Î­Î±Ï‚ Î”Î¹ÎµÏÎ¸Ï…Î½ÏƒÎ·Ï‚",
			"singleprint": "Î•ÎºÏ„ÏÏ€Ï‰ÏƒÎ·",
			"singlelabelbitcoinaddress": "Î”Î¹ÎµÏÎ¸Ï…Î½ÏƒÎ· Bitcoin:",
			"singlelabelprivatekey": "Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯ (ÎœÎ¿ÏÏ†Î® ÎµÎ¹ÏƒÎ±Î³Ï‰Î³Î®Ï‚ ÏƒÎµ Ï€Î¿ÏÏ„Î¿Ï†ÏŒÎ»Î¹):",
			"singletip1": "<b>A Bitcoin wallet</b> is as simple as a single pairing of a Bitcoin address with it's corresponding Bitcoin private key. Such a wallet has been generated for you in your web browser and is displayed above.", //TODO: please translate
			"singletip2": "<b>To safeguard this wallet</b> you must print or otherwise record the Bitcoin address and private key. It is important to make a backup copy of the private key and store it in a safe location. This site does not have knowledge of your private key. If you are familiar with PGP you can download this all-in-one HTML page and check that you have an authentic version from the author of this site by matching the SHA1 hash of this HTML with the SHA1 hash available in the signed version history document linked on the footer of this site. If you leave/refresh the site or press the Generate New Address button then a new private key will be generated and the previously displayed private key will not be retrievable.	Your Bitcoin private key should be kept a secret. Whomever you share the private key with has access to spend all the bitcoins associated with that address. If you print your wallet then store it in a zip lock bag to keep it safe from water. Treat a paper wallet like cash.", //TODO: please translate
			"singletip3": "<b>Add funds</b> to this wallet by instructing others to send bitcoins to your Bitcoin address.", //TODO: please translate
			"singletip4": "<b>Check your balance</b> by going to blockchain.info or blockexplorer.com and entering your Bitcoin address.", //TODO: please translate
			"singletip5": "<b>Spend your bitcoins</b> by going to blockchain.info or mtgox.com and sweep the full balance of your private key into your account at their website. You can also spend your funds by downloading one of the popular bitcoin p2p clients and importing your private key to the p2p client wallet. Keep in mind when you import your single key to a bitcoin p2p client and spend funds your key will be bundled with other private keys in the p2p client wallet. When you perform a transaction your change will be sent to another bitcoin address within the p2p client wallet. You must then backup the p2p client wallet and keep it safe as your remaining bitcoins will be stored there. Satoshi advised that one should never delete a wallet.", //TODO: please translate

			// paper wallet html
			"paperlabelhideart": "Î‘Ï€ÏŒÎºÏÏ…ÏˆÎ· Î³ÏÎ±Ï†Î¹ÎºÎ¿Ï;",
			"paperlabeladdressesperpage": "Î”Î¹ÎµÏ…Î¸ÏÎ½ÏƒÎµÎ¹Ï‚ Î±Î½Î¬ ÏƒÎµÎ»Î¯Î´Î±:",
			"paperlabeladdressestogenerate": "Î Î»Î®Î¸Î¿Ï‚ Î´Î¹ÎµÏ…Î¸ÏÎ½ÏƒÎµÏ‰Î½:",
			"papergenerate": "Î”Î·Î¼Î¹Î¿Ï…ÏÎ³Î¯Î±",
			"paperprint": "Î•ÎºÏ„ÏÏ€Ï‰ÏƒÎ·",
			"paperlabelBIPpassphrase": "Passphrase:", //TODO: please translate
			"paperlabelencrypt": "BIP38 Encrypt?", //TODO: please translate

			// bulk wallet html
			"bulklabelstartindex": "ÎžÎµÎºÎ¯Î½Î·Î¼Î± Î´ÎµÎ¯ÎºÏ„Î·:",
			"bulklabelrowstogenerate": "Î Î»Î®Î¸Î¿Ï‚ ÏƒÎµÎ¹ÏÏŽÎ½:",
			"bulklabelcompressed": "Î£Ï…Î¼Ï€Î¹ÎµÏƒÎ¼Î­Î½ÎµÏ‚ Î´Î¹ÎµÏ…Î¸ÏÎ½ÏƒÎµÎ¹Ï‚;",
			"bulkgenerate": "Î”Î·Î¼Î¹Î¿Ï…ÏÎ³Î¯Î±",
			"bulkprint": "Î•ÎºÏ„ÏÏ€Ï‰ÏƒÎ·",
			"bulklabelcsv": "Î¤Î¹Î¼Î­Ï‚ Ï€Î¿Ï… Ï‡Ï‰ÏÎ¯Î¶Î¿Î½Ï„Î±Î¹ Î¼Îµ ÎºÏŒÎ¼Î¼Î± (CSV):",
			"bulklabelformat": "Î”ÎµÎ¯ÎºÏ„Î·Ï‚,Î”Î¹ÎµÏÎ¸Ï…Î½ÏƒÎ·,Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯ (WIF)",
			"bulklabelq1": "Î“Î¹Î±Ï„Î¯ Î½Î± Ï‡ÏÎ·ÏƒÎ¹Î¼Î¿Ï€Î¿Î¹Î®ÏƒÏ‰ Î Î¿Î»Î»Î±Ï€Î»Î¬ Î Î¿ÏÏ„Î¿Ï†ÏŒÎ»Î¹Î± ÏƒÏ„Î·Î½ Î¹ÏƒÏ„Î¿ÏƒÎµÎ»Î¯Î´Î± Î¼Î¿Ï…;",
			"bulka1": "ÎŸ Ï€Î±ÏÎ±Î´Î¿ÏƒÎ¹Î±ÎºÏŒÏ‚ Ï„ÏÏŒÏ€Î¿Ï‚ Î³Î¹Î± Î½Î± Î´Î­Ï‡ÎµÏƒÏ„Îµ bitcoins ÏƒÏ„Î·Î½ Î¹ÏƒÏ„Î¿ÏƒÎµÎ»Î¯Î´Î± ÏƒÎ±Ï‚, Î±Ï€Î±Î¹Ï„ÎµÎ¯ Ï„Î·Î½ ÎµÎ³ÎºÎ±Ï„Î¬ÏƒÏ„Î±ÏƒÎ· ÎºÎ±Î¹ Î»ÎµÎ¹Ï„Î¿Ï…ÏÎ³Î¯Î± Ï„Î¿Ï… ÎµÏ€Î¯ÏƒÎ·Î¼Î¿Ï… Î´Î±Î¯Î¼Î¿Î½Î± Ï€ÎµÎ»Î¬Ï„Î· bitcoin (\"bitcoind\"). Î‘ÏÎºÎµÏ„Î¬ Ï€Î±ÎºÎ­Ï„Î± Ï†Î¹Î»Î¿Î¾ÎµÎ½Î¯Î±Ï‚ Î´ÎµÎ½ Ï…Ï€Î¿ÏƒÏ„Î·ÏÎ¯Î¶Î¿Ï…Î½ Ï„Î·Î½ ÎµÎ³ÎºÎ±Ï„Î¬ÏƒÏ„Î±ÏƒÎ® Ï„Î¿Ï…. Î•Ï€Î¹Ï€Î»Î­Î¿Î½, Î· ÎµÎºÏ„Î­Î»ÎµÏƒÎ· Ï„Î¿Ï… Ï€ÎµÎ»Î¬Ï„Î· bitcoin ÏƒÏ„Î¿Î½ web server ÏƒÎ±Ï‚ ÏƒÏ…Î½ÎµÏ€Î¬Î³ÎµÏ„Î±Î¹ ÎºÎ±Î¹ Ï„Î· Ï†Î¹Î»Î¿Î¾ÎµÎ½Î¯Î± Ï„Ï‰Î½ Ï€ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŽÎ½ ÏƒÎ±Ï‚ ÎºÎ»ÎµÎ¹Î´Î¹ÏŽÎ½ ÏƒÏ„Î¿Î½ Î¯Î´Î¹Î¿ server, Ï„Î± Î¿Ï€Î¿Î¯Î± Î¼Ï€Î¿ÏÎµÎ¯ Î½Î± Ï…Ï€Î¿ÎºÎ»Î±Ï€Î¿ÏÎ½ Î±Î½ Î¿ server Ï€Î­ÏƒÎµÎ¹ Î¸ÏÎ¼Î± ÎµÏ€Î¯Î¸ÎµÏƒÎ·Ï‚. Î§ÏÎ·ÏƒÎ¹Î¼Î¿Ï€Î¿Î¹ÏŽÎ½Ï„Î±Ï‚ Ï„Î± Î Î¿Î»Î»Î±Ï€Î»Î¬ Î Î¿ÏÏ„Î¿Ï†ÏŒÎ»Î¹Î±, Î±Î½ÎµÎ²Î¬Î¶ÎµÏ„Îµ ÏƒÏ„Î¿Î½ server ÏƒÎ±Ï‚ Î¼ÏŒÎ½Î¿ Ï„Î¹Ï‚ Î´Î¹ÎµÏ…Î¸ÏÎ½ÏƒÎµÎ¹Ï‚ Bitcoin ÎºÎ¹ ÏŒÏ‡Î¹ Ï„Î± Ï€ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÎ¬ ÎºÎ»ÎµÎ¹Î´Î¹Î¬. ÎœÎµ Î±Ï…Ï„ÏŒ Ï„Î¿Î½ Ï„ÏÏŒÏ€Î¿ Î´ÎµÎ½ Ï‡ÏÎµÎ¹Î¬Î¶ÎµÏ„Î±Î¹ Î½Î± Î±Î½Î·ÏƒÏ…Ï‡ÎµÎ¯Ï„Îµ Î¼Î®Ï€Ï‰Ï‚ Ï…Ï€Î¿ÎºÎ»Î±Ï€ÎµÎ¯ Ï„Î¿ Ï€Î¿ÏÏ„Î¿Ï†ÏŒÎ»Î¹ ÏƒÎ±Ï‚.",
			"bulklabelq2": "Î Ï‰Ï‚ Ï‡ÏÎ·ÏƒÎ¹Î¼Î¿Ï€Î¿Î¹ÏŽ Ï„Î± Î Î¿Î»Î»Î±Ï€Î»Î¬ Î Î¿ÏÏ„Î¿Ï†ÏŒÎ»Î¹Î± Î³Î¹Î± Î½Î± Î´Î­Ï‡Î¿Î¼Î±Î¹ bitcoins ÏƒÏ„Î·Î½ Î¹ÏƒÏ„Î¿ÏƒÎµÎ»Î¯Î´Î± Î¼Î¿Ï…;",
			"bulklabela2li1": "Î§ÏÎ·ÏƒÎ¹Î¼Î¿Ï€Î¿Î¹Î®ÏƒÏ„Îµ Ï„Î·Î½ ÎºÎ±ÏÏ„Î­Î»Î± Î Î¿Î»Î»Î±Ï€Î»Î¬ Î Î¿ÏÏ„Î¿Ï†ÏŒÎ»Î¹Î± Î³Î¹Î± Î½Î± Î´Î·Î¼Î¹Î¿Ï…ÏÎ³Î®ÏƒÎµÏ„Îµ Î­Î½Î±Î½ Î¼ÎµÎ³Î¬Î»Î¿ Î±ÏÎ¹Î¸Î¼ÏŒ Î´Î¹ÎµÏ…Î¸ÏÎ½ÏƒÎµÏ‰Î½ Bitcoin (10.000+). Î‘Î½Ï„Î¹Î³ÏÎ¬ÏˆÏ„Îµ ÎºÎ¹ ÎµÏ€Î¹ÎºÎ¿Î»Î»Î®ÏƒÏ„Îµ Ï„Î· Î»Î¯ÏƒÏ„Î± Ï„Ï‰Î½ Ï‡Ï‰ÏÎ¹ÏƒÎ¼Î­Î½Ï‰Î½ Î¼Îµ ÎºÏŒÎ¼Î¼Î± Ï„Î¹Î¼ÏŽÎ½ (CSV) Ï€Î¿Ï… Î´Î·Î¼Î¹Î¿Ï…ÏÎ³Î®Î¸Î·ÎºÎ±Î½, ÏƒÎµ Î­Î½Î± Î±ÏƒÏ†Î±Î»Î­Ï‚ Î±ÏÏ‡ÎµÎ¯Î¿ ÏƒÏ„Î¿Î½ Ï…Ï€Î¿Î»Î¿Î³Î¹ÏƒÏ„Î® ÏƒÎ±Ï‚. Î‘Î½Ï„Î¹Î³ÏÎ¬ÏˆÏ„Îµ Ï„Î¿ Î±ÏÏ‡ÎµÎ¯Î¿ Ï€Î¿Ï… Î´Î·Î¼Î¹Î¿Ï…ÏÎ³Î®ÏƒÎ±Ï„Îµ ÏƒÎµ Î¼Î¹Î± Î±ÏƒÏ†Î±Î»Î® Ï„Î¿Ï€Î¿Î¸ÎµÏƒÎ¯Î±.",
			"bulklabela2li2": "Î•Î¹ÏƒÎ¬Î³ÎµÏ„Îµ Ï„Î¹Ï‚ Î´Î¹ÎµÏ…Î¸ÏÎ½ÏƒÎµÎ¹Ï‚ Bitcoin ÏƒÎµ Î­Î½Î±Î½ Ï€Î¯Î½Î±ÎºÎ± Î²Î¬ÏƒÎ·Ï‚ Î´ÎµÎ´Î¿Î¼Î­Î½Ï‰Î½ ÏƒÏ„Î¿Î½ web server ÏƒÎ±Ï‚. (ÎœÎ·Î½ Î±Î½Ï„Î¹Î³ÏÎ¬ÏˆÎµÏ„Îµ Ï„Î± Ï€ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÎ¬ ÎºÎ»ÎµÎ¹Î´Î¹Î¬ Î® Ï„Î¿ Ï€Î¿ÏÏ„Î¿Ï†ÏŒÎ»Î¹ ÏƒÏ„Î¿Î½ web server Î³Î¹Î±Ï„Î¯ Î´Î¹Î±ÎºÎ¹Î½Î´Ï…Î½ÎµÏÎµÏ„Îµ Î½Î± ÏƒÎ±Ï‚ Ï„Î± ÎºÎ»Î­ÏˆÎ¿Ï…Î½. ÎœÏŒÎ½Î¿ Ï„Î¹Ï‚ Î´Î¹ÎµÏ…Î¸ÏÎ½ÏƒÎµÎ¹Ï‚ Bitcoin Ï€Î¿Ï… Î¸Î± ÎµÎ¼Ï†Î±Î½Î¯Î¶Î¿Î½Ï„Î±Î¹ ÏƒÏ„Î¿Ï…Ï‚ Ï€ÎµÎ»Î¬Ï„ÎµÏ‚.)",
			"bulklabela2li3": "Î Î±ÏÎ­Ï‡ÎµÏ„Îµ ÏƒÏ„Î¿ ÎºÎ±Î»Î¬Î¸Î¹ Î±Î³Î¿ÏÏŽÎ½ ÏƒÎ±Ï‚ Î¼Î¹Î± ÎµÏ€Î¹Î»Î¿Î³Î® Î³Î¹Î± Ï€Î»Î·ÏÏ‰Î¼Î® ÏƒÎµ Bitcoin. ÎŒÏ„Î±Î½ Î¿ Ï€ÎµÎ»Î¬Ï„Î·Ï‚ ÎµÏ€Î¹Î»Î­Î³ÎµÎ¹ Î½Î± Ï€Î»Î·ÏÏŽÏƒÎµÎ¹ Î¼Îµ Bitcoin, Î¸Î± ÎµÎ¼Ï†Î±Î½Î¯ÏƒÎµÏ„Îµ ÏƒÎµ Î±Ï…Ï„ÏŒÎ½ Î¼Î¹Î± Î±Ï€ÏŒ Ï„Î¹Ï‚ Î´Î¹ÎµÏ…Î¸ÏÎ½ÏƒÎµÎ¹Ï‚ Î±Ï€ÏŒ Ï„Î· Î²Î¬ÏƒÎ· Î´ÎµÎ´Î¿Î¼Î­Î½Ï‰Î½, Ï‰Ï‚ Ï„Î·Î½ Â«Ï€ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÎ® Ï„Î¿Ï… Î´Î¹ÎµÏÎ¸Ï…Î½ÏƒÎ· Ï€Î»Î·ÏÏ‰Î¼Î®Ï‚Â» Ï„Î·Î½ Î¿Ï€Î¿Î¯Î± Î¸Î± Î±Ï€Î¿Î¸Î·ÎºÎµÏÏƒÎµÏ„Îµ Î¼Î±Î¶Î¯ Î¼Îµ Ï„Î·Î½ ÎµÎ½Ï„Î¿Î»Î® Î±Î³Î¿ÏÎ¬Ï‚.",
			"bulklabela2li4": "Î¤ÏŽÏÎ± Ï‡ÏÎµÎ¹Î¬Î¶ÎµÏ„Î±Î¹ Î½Î± ÎµÎ¹Î´Î¿Ï€Î¿Î¹Î·Î¸ÎµÎ¯Ï„Îµ Î¼ÏŒÎ»Î¹Ï‚ Î³Î¯Î½ÎµÎ¹ Î· Ï€Î»Î·ÏÏ‰Î¼Î®. Î¨Î¬Î¾Ï„Îµ ÏƒÏ„Î¿ Google Î³Î¹Î± Â«bitcoin payment notificationÂ» ÎºÎ¹ ÎµÎ³Î³ÏÎ±Ï†ÎµÎ¯Ï„Îµ ÏƒÎµ Ï„Î¿Ï…Î»Î¬Ï‡Î¹ÏƒÏ„Î¿ Î¼Î¯Î± Ï…Ï€Î·ÏÎµÏƒÎ¯Î± ÎµÎ¹Î´Î¿Ï€Î¿Î¯Î·ÏƒÎ·Ï‚ Ï€Î»Î·ÏÏ‰Î¼Î®Ï‚. Î¥Ï€Î¬ÏÏ‡Î¿Ï…Î½ Î´Î¹Î¬Ï†Î¿ÏÎµÏ‚ Ï…Ï€Î·ÏÎµÏƒÎ¯ÎµÏ‚ Ï€Î¿Ï… Î¸Î± ÏƒÎ±Ï‚ ÎµÎ¹Î´Î¿Ï€Î¿Î¹Î®ÏƒÎ¿Ï…Î½ Î¼Îµ Web Ï…Ï€Î·ÏÎµÏƒÎ¯ÎµÏ‚, API, SMS, Email, ÎºÎ»Ï€. ÎŒÏ„Î±Î½ Î»Î¬Î²ÎµÏ„Îµ Ï„Î·Î½ ÎµÎ¹Î´Î¿Ï€Î¿Î¯Î·ÏƒÎ·, Î· Î¿Ï€Î¿Î¯Î± Î¼Ï€Î¿ÏÎµÎ¯ Î½Î± Î±Ï…Ï„Î¿Î¼Î±Ï„Î¿Ï€Î¿Î¹Î·Î¸ÎµÎ¯ Ï€ÏÎ¿Î³ÏÎ±Î¼Î¼Î±Ï„Î¹ÏƒÏ„Î¹ÎºÎ¬, ÎµÎºÏ„ÎµÎ»ÎµÎ¯Ï„Îµ Ï„Î·Î½ ÎµÎ½Ï„Î¿Î»Î® Ï„Î¿Ï… Ï€ÎµÎ»Î¬Ï„Î·. Î“Î¹Î± Î½Î± ÎµÎ»Î­Î³Î¾ÎµÏ„Îµ Ï‡ÎµÎ¹ÏÎ¿ÎºÎ¯Î½Î·Ï„Î± Ï„Î·Î½ Ï€Î»Î·ÏÏ‰Î¼Î® Î¼Ï€Î¿ÏÎµÎ¯Ï„Îµ Î½Î± Ï‡ÏÎ·ÏƒÎ¹Î¼Î¿Ï€Î¿Î¹Î®ÏƒÎµÏ„Îµ Ï„Î¿Î½ Block Explorer. Î‘Î½Ï„Î¹ÎºÎ±Ï„Î±ÏƒÏ„Î®ÏƒÏ„Îµ Ï„Î¿ THEADDRESSGOESHERE Î¼Îµ Ï„Î· Bitcoin Î´Î¹ÎµÏÎ¸Ï…Î½ÏƒÎ® ÏƒÎ±Ï‚. Î— ÎµÏ€Î¹Î²ÎµÎ²Î±Î¯Ï‰ÏƒÎ· Ï„Î·Ï‚ Ï€Î»Î·ÏÏ‰Î¼Î®Ï‚ ÎµÎ½Î´Î­Ï‡ÎµÏ„Î±Î¹ Î½Î± Î´Î¹Î±ÏÎºÎ­ÏƒÎµÎ¹ Î±Ï€ÏŒ Î´Î­ÎºÎ± Î»ÎµÏ€Ï„Î¬ Î­Ï‰Ï‚ Î¼Î¯Î± ÏŽÏÎ±.<br />http://www.blockexplorer.com/address/THEADDRESSGOESHERE<br /><br />ÎœÏ€Î¿ÏÎµÎ¯Ï„Îµ Î½Î± Î´ÎµÎ¯Ï„Îµ Ï„Î¹Ï‚ ÏƒÏ…Î½Î±Î»Î»Î±Î³Î­Ï‚ Ï€Î¿Ï… Î´ÎµÎ½ Î­Ï‡Î¿Ï…Î½ ÎµÏ€Î¹Î²ÎµÎ²Î±Î¹Ï‰Î¸ÎµÎ¯ ÏƒÏ„Î¿: http://blockchain.info/ <br />Î˜Î± Ï€ÏÎ­Ï€ÎµÎ¹ Î½Î± Î´ÎµÎ¯Ï„Îµ Ï„Î· ÏƒÏ…Î½Î±Î»Î»Î±Î³Î® ÎµÎºÎµÎ¯ ÎµÎ½Ï„ÏŒÏ‚ 30 Î´ÎµÏ…Ï„ÎµÏÎ¿Î»Î­Ï€Ï„Ï‰Î½.",
			"bulklabela2li5": "Î¤Î± Bitcoins Î¸Î± ÏƒÏ…ÏƒÏƒÏ‰ÏÎµÏÎ¿Î½Ï„Î±Î¹ Î¼Îµ Î±ÏƒÏ†Î¬Î»ÎµÎ¹Î± ÏƒÏ„Î·Î½ Î±Î»Ï…ÏƒÎ¯Î´Î± Ï„Ï‰Î½ Î¼Ï€Î»Î¿Îº. Î§ÏÎ·ÏƒÎ¹Î¼Î¿Ï€Î¿Î¹Î®ÏƒÏ„Îµ Ï„Î¿ Î±ÏÏ‡Î¹ÎºÏŒ Ï€Î¿ÏÏ„Î¿Ï†ÏŒÎ»Î¹ Ï€Î¿Ï… Î´Î·Î¼Î¹Î¿Ï…ÏÎ³Î®ÏƒÎ±Ï„Îµ ÏƒÏ„Î¿ Î²Î®Î¼Î± 1 Î³Î¹Î± Î½Î± Ï„Î± Î¾Î¿Î´Î­ÏˆÎµÏ„Îµ.",
			
			// brain wallet html
			"brainlabelenterpassphrase": "Î•Î¹ÏƒÎ¬Î³ÎµÏ„Îµ ÎºÏ‰Î´Î¹ÎºÏŒ: ",
			"brainlabelshow": "Î•Î¼Ï†Î¬Î½Î¹ÏƒÎ·;",
			"brainprint": "Î•ÎºÏ„ÏÏ€Ï‰ÏƒÎ·",
			"brainlabelconfirm": "Î•Ï€Î¹Î²ÎµÎ²Î±Î¹ÏŽÏƒÏ„Îµ Ï„Î¿Î½ ÎºÏ‰Î´Î¹ÎºÏŒ: ",
			"brainview": "Î”Î·Î¼Î¹Î¿Ï…ÏÎ³Î¯Î±",
			"brainalgorithm": "Î‘Î»Î³ÏŒÏÎ¹Î¸Î¼Î¿Ï‚: SHA256(ÎºÏ‰Î´Î¹ÎºÏŒÏ‚)",
			"brainlabelbitcoinaddress": "Î”Î¹ÎµÏÎ¸Ï…Î½ÏƒÎ· Bitcoin:",
			"brainlabelprivatekey": "Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯ (ÎœÎ¿ÏÏ†Î® ÎµÎ¹ÏƒÎ±Î³Ï‰Î³Î®Ï‚ ÏƒÎµ Ï€Î¿ÏÏ„Î¿Ï†ÏŒÎ»Î¹):",
			
			// vanity wallet html
			"vanitylabelstep1": "Î’Î®Î¼Î± 1 - Î”Î·Î¼Î¹Î¿Ï…ÏÎ³Î®ÏƒÏ„Îµ Ï„Î¿ Â«Î–ÎµÏÎ³Î¿Ï‚ ÎºÎ»ÎµÎ¹Î´Î¹ÏŽÎ½ Ï„Î¿Ï… Î’Î®Î¼Î±Ï„Î¿Ï‚ 1Â»",
			"vanitynewkeypair": "Î”Î·Î¼Î¹Î¿Ï…ÏÎ³Î¯Î±",
			"vanitylabelstep1publickey": "Î’Î®Î¼Î± 1 Î”Î·Î¼ÏŒÏƒÎ¹Î¿ ÎšÎ»ÎµÎ¹Î´Î¯:",
			"vanitylabelstep1pubnotes": "Î‘Î½Ï„Î¹Î³ÏÎ¬ÏˆÏ„Îµ ÎºÎ¹ ÎµÏ€Î¹ÎºÎ¿Î»Î»Î®ÏƒÏ„Îµ Ï„Î¿ Ï€Î±ÏÎ±Ï€Î¬Î½Ï‰ ÏƒÏ„Î¿ Ï€ÎµÎ´Î¯Î¿ Your-Part-Public-Key ÏƒÏ„Î·Î½ Î¹ÏƒÏ„Î¿ÏƒÎµÎ»Î¯Î´Î± Ï„Î¿Ï… Vanity Pool.",
			"vanitylabelstep1privatekey": "Step 1 Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯:",
			"vanitylabelstep1privnotes": "Î‘Î½Ï„Î¹Î³ÏÎ¬ÏˆÏ„Îµ ÎºÎ¹ ÎµÏ€Î¹ÎºÎ¿Î»Î»Î®ÏƒÏ„Îµ Ï„Î¿ Ï€Î±ÏÎ±Ï€Î¬Î½Ï‰ Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯ ÏƒÎµ Î­Î½Î± Î±ÏÏ‡ÎµÎ¯Î¿ ÎºÎµÎ¹Î¼Î­Î½Î¿Ï…. Î™Î´Î±Î½Î¹ÎºÎ¬, Î±Ï€Î¿Î¸Î·ÎºÎµÏÏƒÏ„Îµ Ï„Î¿ ÏƒÎµ Î­Î½Î±Î½ ÎºÏÏ…Ï€Ï„Î¿Î³ÏÎ±Ï†Î·Î¼Î­Î½Î¿ Î´Î¯ÏƒÎºÎ¿. Î˜Î± Ï„Î¿ Ï‡ÏÎµÎ¹Î±ÏƒÏ„ÎµÎ¯Ï„Îµ Î³Î¹Î± Î½Î± Î±Î½Î±ÎºÏ„Î®ÏƒÎµÏ„Îµ Ï„Î¿ Bitcoin Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯ ÏŒÏ„Î±Î½ Î²ÏÎµÎ¸ÎµÎ¯ Ï„Î¿ Ï€ÏÏŒÎ¸ÎµÎ¼Î¬ ÏƒÎ±Ï‚ Î±Ï€ÏŒ Ï„Î¿ Vanity Pool.",
			"vanitylabelstep2calculateyourvanitywallet": "Î’Î®Î¼Î± 2 - Î¥Ï€Î¿Î»Î¿Î³Î¯ÏƒÏ„Îµ Ï„Î¿ Vanity Î Î¿ÏÏ„Î¿Ï†ÏŒÎ»Î¹ ÏƒÎ±Ï‚.",
			"vanitylabelenteryourpart": "Î•Î¹ÏƒÎ¬Î³ÎµÏ„Îµ Ï„Î¿ Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯ Ï€Î¿Ï… Î´Î·Î¼Î¹Î¿Ï…ÏÎ³Î®ÏƒÎ±Ï„Îµ ÏƒÏ„Î¿ Î’Î®Î¼Î± 1 ÎºÎ¹ Î±Ï€Î¿Î¸Î·ÎºÎµÏÏƒÎ±Ï„Îµ:",
			"vanitylabelenteryourpoolpart": "Î•Î¹ÏƒÎ¬Î³ÎµÏ„Îµ Ï„Î¿ Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯ Î±Ï€ÏŒ Ï„Î¿ Vanity Pool:",
			"vanitylabelnote1": "[Î£Î—ÎœÎ•Î™Î©Î£Î—: Î¤Î¿ Ï€ÎµÎ´Î¯Î¿ Î±Ï…Ï„ÏŒ Î¼Ï€Î¿ÏÎµÎ¯ Î½Î± Î´ÎµÏ‡Î¸ÎµÎ¯ ÎµÎ¯Ï„Îµ Î­Î½Î± Î”Î·Î¼ÏŒÏƒÎ¹Î¿ ÎµÎ¯Ï„Îµ Î­Î½Î± Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯.]",
			"vanitylabelnote2": "[Î£Î—ÎœÎ•Î™Î©Î£Î—: Î¤Î¿ Ï€ÎµÎ´Î¯Î¿ Î±Ï…Ï„ÏŒ Î¼Ï€Î¿ÏÎµÎ¯ Î½Î± Î´ÎµÏ‡Î¸ÎµÎ¯ ÎµÎ¯Ï„Îµ Î­Î½Î± Î”Î·Î¼ÏŒÏƒÎ¹Î¿ ÎµÎ¯Ï„Îµ Î­Î½Î± Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯.]",
			"vanitylabelradioadd": "Î ÏÏŒÏƒÎ¸ÎµÏƒÎµ",
			"vanitylabelradiomultiply": "Î Î¿Î»Î»Î±Ï€Î»Î±ÏƒÎ¯Î±ÏƒÎµ",
			"vanitycalc": "Î¥Ï€Î¿Î»Î¿Î³Î¹ÏƒÎ¼ÏŒÏ‚ Ï„Î¿Ï… Î Î¿ÏÏ„Î¿Ï†Î¿Î»Î¹Î¿Ï Vanity",
			"vanitylabelbitcoinaddress": "Vanity Î”Î¹ÎµÏÎ¸Ï…Î½ÏƒÎ· Bitcoin:",
			"vanitylabelnotesbitcoinaddress": "Î Î±ÏÎ±Ï€Î¬Î½Ï‰ ÎµÎ¯Î½Î±Î¹ Î· Î´Î¹ÎµÏÎ¸Ï…Î½ÏƒÎ® ÏƒÎ±Ï‚ Ï€Î¿Ï… Î¸Î± Ï€ÏÎ­Ï€ÎµÎ¹ Î½Î± Ï€ÎµÏÎ¹Î»Î±Î¼Î²Î¬Î½ÎµÎ¹ Ï„Î¿ ÎµÏ€Î¹Î¸Ï…Î¼Î·Ï„ÏŒ Ï€ÏÏŒÎ¸ÎµÎ¼Î±.",
			"vanitylabelpublickeyhex": "Vanity Î”Î·Î¼ÏŒÏƒÎ¹Î¿ ÎšÎ»ÎµÎ¹Î´Î¯ (HEX):",
			"vanitylabelnotespublickeyhex": "Î Î±ÏÎ±Ï€Î¬Î½Ï‰ ÎµÎ¯Î½Î±Î¹ Ï„Î¿ Î”Î·Î¼ÏŒÏƒÎ¹Î¿ ÎšÎ»ÎµÎ¹Î´Î¯ ÏƒÎµ Î´ÎµÎºÎ±ÎµÎ¾Î±Î´Î¹ÎºÎ® Î¼Î¿ÏÏ†Î®. ",
			"vanitylabelprivatekey": "Vanity Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯ (WIF):",
			"vanitylabelnotesprivatekey": "Î Î±ÏÎ±Ï€Î¬Î½Ï‰ ÎµÎ¯Î½Î±Î¹ Ï„Î¿ Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯ Ï€Î¿Ï… Î¸Î± Ï†Î¿ÏÏ„ÏŽÏƒÎµÏ„Îµ ÏƒÏ„Î¿ Î Î¿ÏÏ„Î¿Ï†ÏŒÎ»Î¹ ÏƒÎ±Ï‚. ",
			
			// detail wallet html
			"detaillabelenterprivatekey": "Î•Î¹ÏƒÎ¬Î³ÎµÏ„Îµ Ï„Î¿ Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯",
			"detailkeyformats": "Key Formats: WIF, WIFC, HEX, B64, B6, MINI, BIP38",
			"detailview": "Î ÏÎ¿Î²Î¿Î»Î® Î»ÎµÏ€Ï„Î¿Î¼ÎµÏÎµÎ¹ÏŽÎ½",
			"detailprint": "Î•ÎºÏ„ÏÏ€Ï‰ÏƒÎ·",
			"detaillabelnote1": "Î¤Î¿ Bitcoin Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯ ÎµÎ¯Î½Î±Î¹ Î­Î½Î±Ï‚ Î¼Î¿Î½Î±Î´Î¹ÎºÏŒÏ‚ ÎºÎ±Î¹ Î¼Ï…ÏƒÏ„Î¹ÎºÏŒÏ‚ Î±ÏÎ¹Î¸Î¼ÏŒÏ‚ Ï€Î¿Ï… Î¼ÏŒÎ½Î¿ ÎµÏƒÎµÎ¯Ï‚ Ï€ÏÎ­Ï€ÎµÎ¹ Î½Î± Î³Î½Ï‰ÏÎ¯Î¶ÎµÏ„Îµ, Î¿ Î¿Ï€Î¿Î¯Î¿Ï‚ Î¼Ï€Î¿ÏÎµÎ¯ Î½Î± ÎºÏ‰Î´Î¹ÎºÎ¿Ï€Î¿Î¹Î·Î¸ÎµÎ¯ ÏƒÎµ Ï€Î¿Î»Î»Î­Ï‚ Î´Î¹Î±Ï†Î¿ÏÎµÏ„Î¹ÎºÎ­Ï‚ Î¼Î¿ÏÏ†Î­Ï‚. Î•Î¼Ï†Î±Î½Î¯Î¶Î¿Ï…Î¼Îµ Ï€Î±ÏÎ±ÎºÎ¬Ï„Ï‰ Ï„Î· Î´Î¹ÎµÏÎ¸Ï…Î½ÏƒÎ· Bitcoin ÎºÎ±Î¹ Ï„Î¿ Î”Î·Î¼ÏŒÏƒÎ¹Î¿ ÎšÎ»ÎµÎ¹Î´Î¯, Î¼Î±Î¶Î¯ Î¼Îµ Ï„Î¿ Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯, ÏƒÏ„Î¹Ï‚ Ï€Î¹Î¿ Î´Î·Î¼Î¿Ï†Î¹Î»ÎµÎ¯Ï‚ Î¼Î¿ÏÏ†Î­Ï‚  (WIF, WIFC, HEX, B64, MINI).",
			"detaillabelnote2": "Î¤Î¿ Bitcoin v0.6+ Î±Ï€Î¿Î¸Î·ÎºÎµÏÎµÎ¹ Ï„Î± Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÎ¬ ÎšÎ»ÎµÎ¹Î´Î¹Î¬ ÏƒÎµ ÏƒÏ…Î¼Ï€Î¹ÎµÏƒÎ¼Î­Î½Î· Î¼Î¿ÏÏ†Î®. Î¤Î¿ Ï€ÏÏŒÎ³ÏÎ±Î¼Î¼Î± Ï…Ï€Î¿ÏƒÏ„Î·ÏÎ¯Î¶ÎµÎ¹ ÎµÏ€Î¯ÏƒÎ·Ï‚ ÎµÎ¹ÏƒÎ±Î³Ï‰Î³Î® ÎºÎ¹ ÎµÎ¾Î±Î³Ï‰Î³Î® Ï„Ï‰Î½ Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŽÎ½ ÎšÎ»ÎµÎ¹Î´Î¹ÏŽÎ½ Î¼Îµ Ï„Î¹Ï‚ ÎµÎ½Ï„Î¿Î»Î­Ï‚ importprivkey/dumpprivkey. Î— Î¼Î¿ÏÏ†Î® Ï„Î¿Ï… ÎµÎ¾Î±Î³ÏŒÎ¼ÎµÎ½Î¿Ï… Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÎ¿Ï ÎšÎ»ÎµÎ¹Î´Î¹Î¿Ï Ï€ÏÎ¿ÏƒÎ´Î¹Î¿ÏÎ¯Î¶ÎµÏ„Î±Î¹ Î±Ï€ÏŒ Ï„Î¿ Î±Î½ Î· Î´Î¹ÎµÏÎ¸Ï…Î½ÏƒÎ· Î´Î·Î¼Î¹Î¿Ï…ÏÎ³Î®Î¸Î·ÎºÎµ ÏƒÎµ Î­Î½Î± Ï€Î±Î»Î¹ÏŒ Î® Î½Î­Î¿ Ï€Î¿ÏÏ„Î¿Ï†ÏŒÎ»Î¹.",
			"detaillabelbitcoinaddress": "Î”Î¹ÎµÏÎ¸Ï…Î½ÏƒÎ· Bitcoin:",
			"detaillabelbitcoinaddresscomp": "Î£Ï…Î¼Ï€Î¹ÎµÏƒÎ¼Î­Î½Î· Î”Î¹ÎµÏÎ¸Ï…Î½ÏƒÎ· Bitcoin:",
			"detaillabelpublickey": "Î”Î·Î¼ÏŒÏƒÎ¹Î¿ ÎšÎ»ÎµÎ¹Î´Î¯ (130 Ï‡Î±ÏÎ±ÎºÏ„Î®ÏÎµÏ‚ [0-9A-F]):",
			"detaillabelpublickeycomp": "Î”Î·Î¼ÏŒÏƒÎ¹Î¿ ÎšÎ»ÎµÎ¹Î´Î¯ (Î£Ï…Î¼Ï€Î¹ÎµÏƒÎ¼Î­Î½Î¿, 66 Ï‡Î±ÏÎ±ÎºÏ„Î®ÏÎµÏ‚ [0-9A-F]):",
			"detaillabelprivwif": "Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯ WIF (51 Ï‡Î±ÏÎ±ÎºÏ„Î®ÏÎµÏ‚ base58, Î¾ÎµÎºÎ¹Î½Î¬ÎµÎ¹ Î¼Îµ",
			"detaillabelprivwifcomp": "Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯ WIF (Î£Ï…Î¼Ï€Î¹ÎµÏƒÎ¼Î­Î½Î¿, 52 Ï‡Î±ÏÎ±ÎºÏ„Î®ÏÎµÏ‚ base58, Î¾ÎµÎºÎ¹Î½Î¬ÎµÎ¹ Î¼Îµ",
			"detailcompwifprefix": "'K' Î® 'L'",
			"detaillabelprivhex": "Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯ Î”ÎµÎºÎ±ÎµÎ¾Î±Î´Î¹ÎºÎ® ÎœÎ¿ÏÏ†Î® (64 Ï‡Î±ÏÎ±ÎºÏ„Î®ÏÎµÏ‚ [0-9A-F]):",
			"detaillabelprivb64": "Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯ Base64 (44 Ï‡Î±ÏÎ±ÎºÏ„Î®ÏÎµÏ‚):",
			"detaillabelprivmini": "Î ÏÎ¿ÏƒÏ‰Ï€Î¹ÎºÏŒ ÎšÎ»ÎµÎ¹Î´Î¯ ÎœÎ¿ÏÏ†Î® Mini (22, 26 Î® 30 Ï‡Î±ÏÎ±ÎºÏ„Î®ÏÎµÏ‚, Î¾ÎµÎºÎ¹Î½Î¬ÎµÎ¹ Î¼Îµ 'S'):",
			"detaillabelpassphrase": "BIP38 ÎšÏ‰Î´Î¹ÎºÏŒÏ‚",
			"detaildecrypt": "Î‘Ï€Î¿ÎºÏ‰Î´Î¹ÎºÎ¿Ï€Î¿Î¯Î·ÏƒÎ· BIP38",
			"detaillabelq1": "How do I make a wallet using dice? What is B6?", //TODO: please translate
			"detaila1": "An important part of creating a Bitcoin wallet is ensuring the random numbers used to create the wallet are truly random. Physical randomness is better than computer generated pseudo-randomness. The easiest way to generate physical randomness is with dice. To create a Bitcoin private key you only need one six sided die which you roll 99 times. Stopping each time to record the value of the die. When recording the values follow these rules: 1=1, 2=2, 3=3, 4=4, 5=5, 6=0. By doing this you are recording the big random number, your private key, in B6 or base 6 format. You can then enter the 99 character base 6 private key into the text field above and click View Details. You will then see the Bitcoin address associated with your private key. You should also make note of your private key in WIF format since it is more widely used." //TODO: please translate
		},

	    "it": {
			// javascript alerts or messages
			"testneteditionactivated": "TESTNET EDITION ATTIVATO",
			"paperlabelbitcoinaddress": "Indirizzo Bitcoin:",
			"paperlabelprivatekey": "Chiave privata (Wallet Import Format):",
			"paperlabelencryptedkey": "Chiave privata criptata (password richiesta)",
			"bulkgeneratingaddresses": "Generazione indirizzi... ",
			"brainalertpassphrasetooshort": "La passphrase inserita Ã¨ troppo corta.\n\n",
			"brainalertpassphrasewarning":"Attenzione: La scelta di una passphrase robusta Ã¨ importante per evitare attacchi brute force in grado di indovinare la tua passphrase e rubare i tuoi Bitcoin",
			"brainalertpassphrasedoesnotmatch": "La passphrase non combacia con quella data per la conferma.",
			"detailalertnotvalidprivatekey": "Il testo inserito non rappresenta una Chiave Privata valida",
			"detailconfirmsha256": "Il testo inserito non rappresenta una Chiave privata valida!\n\nVorresti usare il testo inserito come passphrase e creare da questa un hash SHA256 e generare cosÃ¬ una Chiave Privata?\n\nAvvertenza: La scelta di una passphrase robusta Ã¨ importante per evitare che attacchi di tipo \"brute force\" vadano a segno indovinando il testo segreto e di conseguenza far perdere i Bitcoin.",
			"bip38alertincorrectpassphrase": "Passphrase non corretta per questa chiave privata criptata.",
			"bip38alertpassphraserequired": "Passphrase richiesta per chiave BIP38",
			"vanityinvalidinputcouldnotcombinekeys": "Dati inseriti non validi. Le chiavi non possono essere combinate.",
			"vanityalertinvalidinputpublickeysmatch": "Dati inseriti non validi. Entrambe le chiavi pubbliche combaciano. Devi inserire due chiavi differenti.",
			"vanityalertinvalidinputcannotmultiple": "Dati inseriti non validi. Impossibile moltiplicare due chiavi pubbliche. Seleziona 'Aggiungi' per inserire due chiavi pubbliche ed ottenere l'indirizzo Bitcoin.",
			"vanityprivatekeyonlyavailable": "Non disponibile quando vengono combinate due chiavi private",
			"vanityalertinvalidinputprivatekeysmatch": "Dati inseriti non validi. Entrambe le chiavi private combaciano. Devi inserire due chiavi differenti.",

			// header and menu html
			"tagline": "Open Source JavaScript Client-Side Bitcoin Wallet Generator",
			"generatelabelbitcoinaddress": "Generazione Indirizzo Bitcoin...",
			"generatelabelmovemouse": "MUOVI il tuo mouse per contribuire alla generazione dei numeri casuali...",
			"generatelabelkeypress": "OR type some random characters into this textbox", //TODO: please translate
			"singlewallet": "Singolo portafoglio",
			"paperwallet": "Paper Wallet",
			"bulkwallet": "Portafogli multipli",
			"brainwallet": "Brain Wallet",
			"vanitywallet": "Vanity Wallet",
			"detailwallet": "Dettagli portafoglio",

			// footer html
			"footerlabeldonations": "Donazioni:",
			"footerlabeltranslatedby": "",
			"footerlabelpgp": "PGP",
			"footerlabelversion": "Cronologia Versioni",
			"footerlabelgithub": "Repository GitHub",
			"footerlabelcopyright1": "Copyright Cryptowallets.org.",
			"footerlabelcopyright2": "Le note di copyright dei file JavaScript sono inclusi nei sorgenti stessi.",
			"footerlabelnowarranty": "Nessuna garanzia.",

			// single wallet html
			"newaddress": "Genera un Nuovo Indirizzo",
			"singleprint": "Stampa",
			"singlelabelbitcoinaddress": "Indirizzo Bitcoin:",
			"singlelabelprivatekey": "Chiave privata (Wallet Import Format):",
			"singletip1": "<b>Un portafogli bitcoin</b> Ã¨ composto semplicemente da una coppia di valori: l'indirizzo e la sua chiave privata. Un portafogli Ã¨ stato appena generato sul tuo browser e mostrato sopra.",
			"singletip2": "<b>Per mettere in sicurezza questo portafogli</b> devi stampare o quantomeno salvare l'indirizzo bitcoin e la Chiave privata. Ãˆ molto importante fare una copia di backup della chiave privata e conservarla in un posto sicuro. Questo sito non conosce la tua chiave privata. Se hai familiaritÃ  con PGP, puoi scaricare per intero questa pagina HTML e controllare la sua autentiticitÃ . Puoi confrontare il codice SHA1 della pagina scaricata con il codice firmato dall'autore che trovi nella cronologia delle versioni (in fondo alla pagina). Se abbandoni/aggiorni la pagina web oppure premi il tasto Genera, un nuovo indirizzo sostituirÃ  quello vecchio che non potrÃ  piÃ¹ essere recuperato. La chiave privata dovrebbe essere tenuta segreta, chiunque conosca la chiave privata puÃ² avere accesso e spendere i tuoi bitcoin. Se stampi il tuo portafogli conservalo in una busta di plastica sigillata per tenerla al riparo dall'acqua. Tratta quanto stampato alla stregua di una banconota.",
			"singletip3": "<b>Ricevi fondi</b> su questo portafogli mostrando l'indirizzo bitcoin per il versamento.",
			"singletip4": "<b>Controlla il saldo</b> visitando blockchain.info o blockexplorer.com cercando il tuo indirizzo bitcoin.",
			"singletip5": "<b>Spendi i tuoi bitcoin</b> aprendo un account su blockchain.info o mtgox.com usando la chiave privata. Puoi anche spendere i tuoi bitcoin scaricando il popolare client p2p ed importando in esso il portafogli. Tieni presente che quando importi una chiave nel client p2p, nel momento in cui spendi le monete, la chiave viene raggruppata insieme alle altre presenti nel programma con i restanti bitcoin. Quando esegui una transazione gli spiccioli verranno invitati verso un altro indirizzo all'interno del tuo portafogli gestito dal client p2p. Quindi dovresti tenere un backup del portafogli contenuto nel client p2p e tenere questo in un posto sicuro fin tanto terrai dei bitcoin lÃ¬. Satoshi consiglia di non cancellare mai un portafogli. ",

			// paper wallet html
			"paperlabelhideart": "Senza grafica?",
			"paperlabeladdressesperpage": "Indirizzi per pagina:",
			"paperlabeladdressestogenerate": "Indirizzi da generare:",
			"papergenerate": "Genera",
			"paperprint": "Stampa",
			"paperlabelBIPpassphrase": "Passphrase:",
			"paperlabelencrypt": "BIP38 criptato?",
			"paperadvancedcommandslabel": "Opzioni avanzate",

			// bulk wallet html
			"bulklabelstartindex": "Indice iniziale:",
			"bulklabelrowstogenerate": "Righe da generare:",
			"bulklabelcompressed": "Indirizzo compresso?",
			"bulkgenerate": "Genera",
			"bulkprint": "Stampa",
			"bulklabelcsv": "Valori Separati da virgola:",
			"bulklabelformat": "Indice,Indirizzo,Chiave Privata (WIF)",
			"bulklabelq1": "PerchÃ© dovrei usare tanti portafogli per accettare Bitcoin sul mio sito web?",
			"bulka1": "Il tradizionale approcio per accettare i Bitcoin Ã¨ quello di installare il demone ufficiale Bitcoin (\"bitcoind\"). Molti pacchetti di hosting web non supportano l'installazione di tale demone. Inoltre tenere in esecuzione il demone richiede che la chiave privata del portafogli sia custodita sul server, se questo viene violato tramite hacking puoi perdere tutti i Bitcoin. Usando portafogli multipli puoi caricare sul server solo l'indirizzo per il versamento e non la chiave privata. Quindi non devi preoccuparti del tuo portafogli nel caso in cui il server venga violato con un attacco di hacking.",
			"bulklabelq2": "Come utilizzo tutti questi portafogli per accettare Bitcoin sul mio sito web?",
			"bulklabela2li1": "Usa la funzione \"Portafogli multipli\" per generare una grande quantitÃ  di indirizzi Bitcoin (10,000+). Copia e incolla la lista generata in formato CSV (campi separati da virgola) su un file, al sicuro nel tuo computer. Fai una copia di backup di questo file e mettilo un posto sicuro.",
			"bulklabela2li2": "Importa gli indirizzi Bitcoin in una tabella del database sul tuo web server. (Non importare i portafogli/chiavi private sul web server, altrimenti corri il rischio che rubino i tuoi Bitcoin con l'hacking. Usa gli indirizzi Bitcoin cosÃ¬ come verranno mostrati ai tuoi clienti.)",
			"bulklabela2li3": "Fornisci una opzione nel carrello del tuo sito web per pagare in Bitcoin. Quando il cliente sceglie di pagare in Bitcoin, gli mostrerai un indirizzo dal tuo database come \"indirizzo di pagamento\" e conserverai questo stesso indirizzo insieme ai dati dell'ordine.",
			"bulklabela2li4": "Ora hai bisogno di notificare l'arrivo del pagamento. Cerca su Google \"notifiche pagamento Bitcoin\" ed iscriviti ad almeno un servizio di notifica. Esistono diversi servizi che possono notificare in vari modi come Web Services, API, SMS, Email, etc. Una volta ricevuta la notifica, la quale puÃ² essere automatizzata con la programmazione, puoi processare l'ordine del cliente. Per verificare manualmente se l'ordine Ã¨ davvero arrivato puoi usare un block explorer. Sostituisci INDIRIZZODACONTROLLARE con l'indirizzo Bitcoin da controllare. Possono volerci dai 10 fino a 60 minuti per fare in modo che una transazione venga confermata.<br>http://www.blockexplorer.com/address/INDIRIZZODACONTROLLARE<br><br>Le transazioni non confermate possono essere visionate su: http://blockchain.info/ <br>Dovresti vedere la transazione entro 30 secondi.",
			"bulklabela2li5": "In questo modo i Bitcoin transiteranno nella blockchain in tutta sicurezza. Usa il portafogli creato nel Passo 1 per spendere i Bitcoin.",

			// brain wallet html
			"brainlabelenterpassphrase": "Inserisci la Passphrase: ",
			"brainlabelshow": "Mostra?",
			"brainprint": "Stampa",
			"brainlabelconfirm": "Conferma Passphrase: ",
			"brainview": "Visiona",
			"brainalgorithm": "Algoritmo: SHA256(passphrase)",
			"brainlabelbitcoinaddress": "Indirizzo Bitcoin:",
			"brainlabelprivatekey": "Chiave privata (Wallet Import Format):",

			// vanity wallet html
			"vanitylabelstep1": "Passo1 1 - Genera la tua Coppia di chiavi",
			"vanitynewkeypair": "Genera",
			"vanitylabelstep1publickey": "Passo 1 Chiave pubblica:",
			"vanitylabelstep1pubnotes": "Copia e incolla il testo soprastante nel campo \"chiave-pubblica-parziale\" sul sito web del pool.",
			"vanitylabelstep1privatekey": "Passo 1 Chiave pubblica:",
			"vanitylabelstep1privnotes": "Copia & incolla la Chiave privata soprastante su un file di testo. Idealmente conservalo su un disco criptato. Ti servirÃ  per recuperare la Chiave privata una volta che il Pool avrÃ  trovato quella col prefisso scelto.",
			"vanitylabelstep2calculateyourvanitywallet": "Passo 2 - Calcolo del Vanity Wallet",
			"vanitylabelenteryourpart": "Inserisci la tua Chiave Privata parziale (Generata nel Passo 1 e precedentemente salvata):",
			"vanitylabelenteryourpoolpart": "Inserisci la Chiave privata parziale generata dal pool (dal Vanity Pool):",
			"vanitylabelnote1": "[NOTA: questo campo puÃ² accettare sia chiavi pubbliche che private]",
			"vanitylabelnote2": "[NOTA: questo campo puÃ² accettare sia chiavi pubbliche che private]",
			"vanitylabelradioadd": "Aggiungi",
			"vanitylabelradiomultiply": "Moltiplica",
			"vanitycalc": "Calcola Vanity Wallet",
			"vanitylabelbitcoinaddress": "Indirizzo del Vanity Wallet:",
			"vanitylabelnotesbitcoinaddress": "Sopra trovi il tuo nuovo indirizzo che dovrebbe includere il prefisso che hai scelto.",
			"vanitylabelpublickeyhex": "Chiave pubblica del Vanity Wallet (HEX):",
			"vanitylabelnotespublickeyhex": "Quella sopra Ã¨ la Chiave Pubblica nel formato esadecimale. ",
			"vanitylabelprivatekey": "Chiave privata del Vanity Wallet (WIF):",
			"vanitylabelnotesprivatekey": "Quella sopra Ã¨ la Chiave Privata nel formato esadecimale.  ",
			
			// detail wallet html
			"detaillabelenterprivatekey": "Inserisci la Chiave Privata",
			"detailkeyformats": "Key Formats: WIF, WIFC, HEX, B64, B6, MINI, BIP38",
			"detailview": "Mostra Dettagli",
			"detailprint": "Stampa",
			"detaillabelnote1": "La tua Chiave privata Bitcoin Ã¨ rappresentata da un numero segreto, unico al mondo, che dovresti conoscere soltanto tu. PuÃ² essere codificato in molti formati differenti. Di seguito verrÃ  mostrato l'indirizzo Bitcoin e la chiave pubblica, con la corrispondente chiave privata, nei piÃ¹ diffusi formati di codifica (WIF, WIFC, HEX, B64, MINI).",
			"detaillabelnote2": "Il client Bitcoin, dalla versione v0.6, memorizza le chiavi pubbliche in formato compresso. Il programma ora supporta l'importazione e l'esportazione delle chiavi private attraverso importprivkey/dumpprivkey. Il formato con cui viene esportata la chiave privata dipende se l'indirizzo generato Ã¨ stato creato con il nuovo o vecchio portafogli.",
			"detaillabelbitcoinaddress": "Indirizzo Bitcoin",
			"detaillabelbitcoinaddresscomp": "Indirizzo Bitcoin compresso",
			"detaillabelpublickey": "Chiave pubblica (130 caratteri [0-9A-F]):",
			"detaillabelpublickeycomp": "Chiave pubblica (compressa, 66 caratteri [0-9A-F]):",
			"detaillabelprivwif": "Chiave privata WIF<br>51 caratteri base58, inizia per a",
			"detaillabelprivwifcomp": "Chiave privata WIF compressa<br>52 caratteri base58, inizia per 'a'",
			"detailcompwifprefix": "'K' o 'L'",
			"detaillabelprivhex": "Chiave privata formato esadecimale (64 caratteri [0-9A-F]):",
			"detaillabelprivb64": "Chiave privata Base64 (44 caratteri):",
			"detaillabelprivmini": "Chiave privata formato mini (22, 26 or 30 caratteri, inizia per 'S'):",
			"detaillabelpassphrase": "Inserisci passphrase BIP38",
			"detaildecrypt": "Decripta BIP38",
			"detaillabelq1": "How do I make a wallet using dice? What is B6?", //TODO: please translate
			"detaila1": "An important part of creating a Bitcoin wallet is ensuring the random numbers used to create the wallet are truly random. Physical randomness is better than computer generated pseudo-randomness. The easiest way to generate physical randomness is with dice. To create a Bitcoin private key you only need one six sided die which you roll 99 times. Stopping each time to record the value of the die. When recording the values follow these rules: 1=1, 2=2, 3=3, 4=4, 5=5, 6=0. By doing this you are recording the big random number, your private key, in B6 or base 6 format. You can then enter the 99 character base 6 private key into the text field above and click View Details. You will then see the Bitcoin address associated with your private key. You should also make note of your private key in WIF format since it is more widely used." //TODO: please translate
	    },
	    
	    "de": {
			// javascript alerts or messages
			"testneteditionactivated": "TESTNET AKTIVIERT",
			"paperlabelbitcoinaddress": "Bitcoin-Adresse:",
			"paperlabelprivatekey": "Privater Schl&uuml;ssel (Wallet Import Format):",
			"paperlabelencryptedkey": "Verschl&uuml;sselter privater Schl&uuml;ssel (Passwort ben&ouml;tigt)",
			"bulkgeneratingaddresses": "Adressen erstellen... ",
			"brainalertpassphrasetooshort": "Die eingegebene Passphrase ist zu kurz.\n\n",
			"brainalertpassphrasewarning": "Hinweis: Eine lÃ¤ngere Passphrase schÃ¼tzt besser vor Brute-Force-Attacken, bei denen auf gut GlÃ¼ck Passphrasen probiert werden.",
			"brainalertpassphrasedoesnotmatch": "Die beiden Passphrasen stimmen nicht Ã¼berein.",
			"detailalertnotvalidprivatekey": "Der eingegebene Text ist kein gÃ¼ltiger privater SchlÃ¼ssel.",
			"detailconfirmsha256": "Der eingegebene Text ist kein gÃ¼ltiger privater SchlÃ¼ssel!\n\nMÃ¶chtest du den eingegebenen Text als Passphrase verwenden, um mithilfe dessen SHA256-Hash einen privaten SchlÃ¼ssel zu erstellen?\n\nHinweis: Eine lÃ¤ngere Passphrase sch&uuml;tzt besser vor Brute-Force-Attacken, bei denen auf gut GlÃ¼ck Passphrasen probiert werden.",
			"bip38alertincorrectpassphrase": "Falsches Passwort",
			"bip38alertpassphraserequired": "Bitte Passwort eingeben.",
			"vanityinvalidinputcouldnotcombinekeys": "UnzulÃ¤ssige Eingaben. Die SchlÃ¼ssel konnten nicht kombiniert werden.",
			"vanityalertinvalidinputpublickeysmatch": "UnzulÃ¤ssige Eingaben. Die eingegebenen Ã¶ffentlichen SchlÃ¼ssel stimmen Ã¼berein. Bitte gib zwei unterschiedliche SchlÃ¼ssel ein.",
			"vanityalertinvalidinputcannotmultiple": "UnzulÃ¤ssige Eingaben. Zwei Ã¶ffentliche SchlÃ¼ssel kÃ¶nnen nicht miteinander multipliziert werden. WÃ¤hle \"Addieren\" aus, um aus zwei Ã¶ffentlichen SchlÃ¼sseln eine Bitcoin-Adresse zu erstellen.",
			"vanityprivatekeyonlyavailable": "Nur verfÃ¼gbar, wenn zwei private SchlÃ¼ssel kombiniert werden.",
			"vanityalertinvalidinputprivatekeysmatch": "UnzulÃ¤ssige Eingaben. Die eingegebenen privaten SchlÃ¼ssel stimmen Ã¼berein. Bitte gib zwei unterschiedliche SchlÃ¼ssel ein.",

			// header and menu html
			"tagline": "Offener, client-seitiger Bitcoin-Wallet-Generator in JavaScript",
			"generatelabelbitcoinaddress": "Erstelle Bitcoin-Wallet...",
			"generatelabelmovemouse": "Bewege deine Maus umher, um die Zuf&auml;lligkeit zu erh&ouml;hen...",
			"generatelabelkeypress": "OR type some random characters into this textbox", //TODO: please translate
			"singlewallet": "Einzelnes Wallet",
			"paperwallet": "Papier-Wallet",
			"bulkwallet": "Massen-Wallet",
			"brainwallet": "Kopf-Wallet",
			"vanitywallet": "Personalisiertes Wallet",
			"detailwallet": "Walletdetails",

			// footer html
			"footerlabeldonations": "Spenden:",
			"footerlabeltranslatedby": "&Uuml;bersetzung: 1EWPcmYmU8MamRUYMFWQa1r7A2Tskz78t5",
			"footerlabelpgp": "PGP",
			"footerlabelversion": "Versionsgeschichte",
			"footerlabelgithub": "GitHub-Repository",
			"footerlabelcopyright1": "Copyright Cryptowallets.org.",
			"footerlabelcopyright2": "JavaScript-Copyrights sind im Quelltext enthalten.",
			"footerlabelnowarranty": "Ohne Gew&auml;hr.",

			// single wallet html
			"newaddress": "Neues Wallet erstellen",
			"singleprint": "Drucken",
			"singlelabelbitcoinaddress": "Bitcoin-Adresse",
			"singlelabelprivatekey": "Privater Schl&uuml;ssel (WIF &ndash; zum Importieren geeignet):",
			"singletip1": "<b>Ein Bitcoin-Wallet </b>(Geldb&ouml;rse) ist nichts anderes als eine Bitcoin-Adresse (&ouml;ffentlicher Schl&uuml;ssel) und der zu ihr geh&ouml;rende private Schl&uuml;ssel. Oben findest du ein solches, gerade f&uuml;r dich erstelltes Wallet, bestehend aus den beiden Zeichenketten. Die QR-Codes dienen lediglich der Vereinfachung und enthalten kodiert die Adresse bzw. den privaten Schl&uuml;ssel.",
			"singletip2": "<b>Um dieses Wallet zu sch&uuml;tzen,</b> musst du es entweder ausdrucken oder anderweitig die Bitcoin-Adresse und den privaten Schl&uuml;ssel sichern. Fertige auf jeden Fall eine Kopie des privaten Schl&uuml;ssels an und bewahre sie an einem sicheren Ort auf. Der private Schl&uuml;ssel liegt nur lokal auf deinem Rechner vor und wurde nicht ins Internet &uuml;bertragen. Falls du dich mit PGP auskennst, kannst du dir diese all-in-one HTML-Seite herunterladen. Um zu &uuml;berpr&uuml;fen, ob die heruntergeladene Version authentisch ist, kannst du den SHA1-Hash dieser Seite mit dem SHA1-Hash in der signierten Versionsgeschichte am unteren Ende dieser Seite abgleichen. Wenn du diese Seite verl&auml;sst, sie neul&auml;dst bzw. den \"Neues Wallet erstellen\"-Button dr&uuml;ckst, wird ein neues Wallet erstellt und das vorherige wird nicht mehr abrufbar sein. Du solltest deinen privaten Schl&uuml;ssel geheim halten. Wer den privaten Schl&uuml;ssel hat, kann damit auf alle im Wallet befindlichen Bitcoin zugreifen und sie nach Belieben ausgeben. Behandle dein gedrucktes Wallet wie echtes Geld!",
			"singletip3": "Du kannst <b>Guthaben</b> zu deinem Wallet <b>hinzuf&uuml;gen</b>, indem du genau wie bei anderen &Uuml;berweisungen Bitcoins an die Bitcoin-Adresse deines Wallets schickst.",
			"singletip4": "<b>&Uuml;berpr&uuml;fe dein Guthaben,</b> indem du deine Bitcoin-Adresse auf blockchain.info bzw. blockexplorer.com eingibst.",
			"singletip5": "Du kannst deine <b>Bitcoins ausgeben</b>, indem du das gesamte mit deinem privaten Schl&uuml;ssel verbundene Guthaben auf deinen Account bei blockchain.info bzw. mtgox.com &uuml;bertr&auml;gst. Alternativ kannst du dir ein Bitcoinprogramm herunterladen und deinen privaten Schl&uuml;ssel in dieses importieren. Beachte dabei aber, dass, sobald du Bitcoins mit dem Programm sendest, dein privater Schl&uuml;ssel mit den anderen privaten Schl&uuml;sseln, die vom Programm bereitgestellt werden, verbunden wird. Bei einer &Uuml;berweisung wird etwas R&uuml;ckgeld an eine der Bitcoin-Adressen des Programms geschickt. Deswegen musst du, um tats&auml;chlich dein gesamtes Guthaben zu sichern, ein Backup vom gesamten Wallet des Programms, das nun auch deinen importierten privaten Schl&uuml;ssel enth&auml;lt, anfertigen. Satoshi r&auml;t, dass man unter keinen Umst&auml;nden ein Wallet l&ouml;schen sollte.", 

			// paper wallet html
			"paperlabelhideart": "Grafische Gestaltung ausblenden?",
			"paperlabeladdressesperpage": "Adressen je Seite:",
			"paperlabeladdressestogenerate": "Anzahl zu erstellender Adressen:",
			"papergenerate": "Erstellen",
			"paperprint": "Drucken",
			"paperlabelBIPpassphrase": "Passwort:",
			"paperlabelencrypt": "Mit BIP38 verschl&uuml;sseln?",

			// bulk wallet html
			"bulklabelstartindex": "Startindex:",
			"bulklabelrowstogenerate": "Zu erstellende Adressen:",
			"bulklabelcompressed": "Adressen komprimieren?",
			"bulkgenerate": "Erstellen",
			"bulkprint": "Drucken",
			"bulklabelcsv": "Comma Separated Values (CSV):",
			"bulklabelformat": "Index, Adresse, privater Schl&uuml;ssel (WIF)",
			"bulklabelq1": "Warum sollte ich ein Massen-Wallet auf meiner Webseite einsetzen?",
			"bulka1": "Bisher musste immer der offizielle Bitcoin-Daemon, bitcoind, auf dem Server installiert sein, damit man Bitcoins auf seiner Webseite annehmen konnte. Viele Webhoster blockieren die Installation von bitcoind. Au&szlig;erdem m&uuml;ssen die privaten Schl&uuml;ssel auf dem Server liegen, damit bitcoind funktioniert, obwohl sie dort einfacher gestohlen werden k&ouml;nnen. Mit einem Massen-Wallet brauchst du nur noch die Bitcoin-Adressen und nicht mehr zus&auml;tzlich die privaten Schl&uuml;ssel hochladen. Dadurch musst du dir keine Sorgen mehr machen, dass dein Bitcoin-Wallet gestohlen werden k&ouml;nnte, wenn unberechtigt in deinen Server eingedrungen wird.",
			"bulklabelq2": "Wie kann ich ein Massen-Wallet in meine Webseite integrieren?",
			"bulklabela2li1": "Erstelle mithilfe dieser Seite ganz viele Bitcoin-Adressen (10.000+). Kopiere die CSV-Liste in eine sichere Textdatei auf deinem Computer. Fertige ein Backup dieser Datei an und speichere sie an einem sicheren Ort.",
			"bulklabela2li2": "Importiere die Bitcoin-Adressen in eine Datenbank auf deinem Server. (Lege nur die Bitcoin-Adressen, nicht aber die privaten Schl&uuml;ssel auf deinem Server ab!)",
			"bulklabela2li3": "Biete deinen Kunden auf deiner Webseite Bitcoin als Zahlungsm&ouml;glichkeit an. Wenn ein Kunde mit Bitcoin zahlen m&ouml;chte, zeige ihm eine der Adressen aus deiner Datenbank als Zahlungsadresse an und speichere sie mit seiner Bestellung.",
			"bulklabela2li4": "Jetzt musst du dir den Zahlungseingang best&auml;tigen lassen. Google \"bitcoin payment notification\" und melde dich bei mindestens einem solchen Anbieter an. Es gibt verschiedene Anbieter, die dich via Web, API, SMS, E-Mail etc. &uuml;ber erfolgte Transaktionen informieren k&ouml;nnen. Sobald du die Eingangsbest&auml;tigung erh&auml;lst, kannst du automatisch die Bestellung abwickeln lassen. Um selber zu schauen, ob eine Zahlung erfolgt ist, kannst du Block Explorer nutzen. Ersetze BITCOINADRESSE durch die Bitcoin-Adresse, die du pr&uuml;fen m&ouml;chtest. Es dauert von zehn Minuten bis zu einer Stunde, um Transaktionen zu best&auml;tigen. <br />http://www.blockexplorer.com/address/BITCOINADRESSE<br /> <br />Unbest&auml;tigte Transaktionen findest du hier: http://blockchain.info/ <br /> S&auml;mtliche Transaktionen sollten dort innerhalb von 30 Sekunden auftauchen.",
			"bulklabela2li5": "Deine Bitcoins werden sicher in die Block-Chain aufgenommen. Mithilfe des urspr&uuml;nglichen Wallets vom ersten Schritt kannst du sie ausgeben.",

			// brain wallet html
			"brainlabelenterpassphrase": "Passphrase eingeben:",
			"brainlabelshow": "Aufdecken?",
			"brainprint": "Drucken",
			"brainlabelconfirm": "Passphrase wiederholen:",
			"brainview": "ZugehÃ¶riges Wallet anzeigen",
			"brainalgorithm": "Algorithmus: SHA256 (Passphrase)",
			"brainlabelbitcoinaddress": "Bitcoin-Adresse:",
			"brainlabelprivatekey": "Privater Schl&uuml;ssel (WIF):",

			// vanity wallet html
			"vanitylabelstep1": "Schritt 1 - Erstelle dein Schl&uuml;sselpaar",
			"vanitynewkeypair": "Erstellen",
			"vanitylabelstep1publickey": "&Ouml;ffentlicher Schl&uuml;ssel:",
			"vanitylabelstep1pubnotes": "Kopiere den obigen &ouml;ffentlichen Schl&uuml;ssel in das \"Your public key\"-Feld auf der Webseite von Vanity Pool.",
			"vanitylabelstep1privatekey": "Privater Schl&uuml;ssel (Your Part Private Key):",
			"vanitylabelstep1privnotes": "Speichere den obigen privaten Schl&uuml;ssel in einer Textdatei, die du am besten auf einem verschl&uuml;sselten Laufwerk sicherst. Sobald der Vanity-Pool deine personalisierte Bitcoin-Adresse gefunden hat, kannst du den zu ihr geh&ouml;renden privaten Schl&uuml;ssel nur mithilfe des vom Pools berechneten privaten Schl&uuml;ssels (Pool Part Private Key) und des obigen privaten Schl&uuml;ssels (Your Part Private Key) erhalten. Beide privaten Schl&uuml;ssel (Pool und Your) werden zum Berechnen des privaten Schl&uuml;ssels deiner personalisierten Bitcoin-Adresse ben&ouml;tigt, damit wirklich nur jemand, der beide besitzt, das personalisierte Wallet nutzen kann.",
			"vanitylabelstep2calculateyourvanitywallet": "Schritt 2 - Berechne dein personalisiertes Wallet",
			"vanitylabelenteryourpart": "Gib hier deinen privaten Schl&uuml;ssel von oben ein (Your Part Private Key):",
			"vanitylabelenteryourpoolpart": "Gib hier den von Vanity-Pool erhaltenen privaten Schl&uuml;ssel ein (Pool Part Private Key):",
			"vanitylabelnote1": "[HINWEIS: Dieses Eingabefeld nimmt sowohl &ouml;ffentlich als auch private Schl&uuml;ssel an.]",
			"vanitylabelnote2": "[HINWEIS: Dieses Eingabefeld nimmt sowohl &ouml;ffentlich als auch private Schl&uuml;ssel an.]",
			"vanitylabelradioadd": "Addieren",
			"vanitylabelradiomultiply": "Multiplizieren",
			"vanitycalc": "Personalisiertes Wallet berechnen",
			"vanitylabelbitcoinaddress": "Personalisierte Bitcoin-Adresse:",
			"vanitylabelnotesbitcoinaddress": "Die obige Bitcoin-Adresse sollte den gew&uuml;nschten Pr&auml;fix enthalten.",
			"vanitylabelpublickeyhex": "Personalisierter &ouml;ffentlicher Schl&uuml;ssel (HEX):",
			"vanitylabelnotespublickeyhex": "Die obige Zeichenfolge ist der &ouml;ffentliche Schl&uuml;ssel (Bitcoin-Adresse) im Hexadezimalformat.",
			"vanitylabelprivatekey": "Personalisierter privater Schl&uuml;ssel (WIF):",
			"vanitylabelnotesprivatekey": "Der obige private Schl&uuml;ssel erm&ouml;glicht das Importieren in andere Wallets.",

			// detail wallet html
			"detaillabelenterprivatekey": "Privaten Schl&uuml;ssel eingeben:",
			"detailkeyformats": "UnterstÃ¼tzte Formate: WIF, WIFC, HEX, B64, B6, MINI, BIP38",	
			"detailview": "Details anzeigen",
			"detailprint": "Drucken",
			"detaillabelnote1": "Der private Schl&uuml;ssel deines Wallets ist eine geheime, einzigartige Zeichenfolge, die nur du kennst. Er kann auf mehrer Arten dargestellt werden. Unten findest du die zugeh&ouml;rige Bitcoin-Adresse bzw. &ouml;ffentlichen Schl&uuml;ssel sowie den privaten Schl&uuml;ssel in den verbreitetsten Formaten.",
			"detaillabelnote2": "Ab Version 0.6 speichert Bitcoin-qt &ouml;ffentliche Schl&uuml;ssel komprimiert. Das Programm unterst&uuml;tzt nun auch den Import und Export von privaten Schl&uuml;sseln mit importprivkey/dumpprivkey. Das Format des exportierten privaten Schl&uuml;ssels h&auml;ngt davon ab, ob die Adresse in einem alten oder neuen Wallet erstellt wurde.",
			"detaillabelbitcoinaddress": "Bitcoin-Adresse:",
			"detaillabelbitcoinaddresscomp": "Komprimierte Bitcoin-Adresse:",
			"detaillabelpublickey": "&Ouml;ffentlicher Schl&uuml;ssel (130 Zeichen [0-9A-F]):",
			"detaillabelpublickeycomp": "Komprimierter &ouml;ffentlicher Schl&uuml;ssel (66 Zeichen [0-9A-F]):",
			"detaillabelprivwif": "Privater Schl&uuml;ssel WIF  <br /> 51 Zeichen in base58, beginnt mit",
			"detaillabelprivwifcomp": "Komprimierter privater Schl&uuml;ssel WIF <br /> 52 Zeichen in base58, beginnt mit",
			"detailcompwifprefix": "'K' oder 'L'",
			"detaillabelprivhex": "Privater Schl&uuml;ssel in Hexadezimal (64 Zeichen [0-9A-F]):",
			"detaillabelprivb64": "Privater Schl&uuml;ssel in base64 (44 Zeichen):",
			"detaillabelprivmini": "Privater Schl&uuml;ssel in mini (22, 26 oder 30 Zeichen, beginnt mit 'S'):",
			"detaillabelpassphrase": "Passwort f&uuml;r BIP38 eingeben",
			"detaildecrypt": "Entschl&uuml;sseln",
			"detaillabelq1": "Wie erstelle ich ein Wallet mithilfe eines WÃ¼rfels? Was versteht man unter B6?",
			"detaila1": "Beim Erstellen eines Bitcoin-Wallets sollten die dafÃ¼r genutzten Zufallszahlen auch tatsÃ¤chlich zufÃ¤llig sein. Ein echter WÃ¼rfel liefert wesentlich zufÃ¤lligere Zahlen als ein Computer. Um einen privaten SchlÃ¼ssel zu erstellen, sind lediglich 99 WÃ¼rfe mit einem normalen WÃ¼rfel nÃ¶tig. Nach jedem Wurf solltest du die Augenzahl nach folgendem Muster aufschreiben: 1-\>1, 2-\>2, 3-\>3, 4-\>4, 5-\>5, 6-\>0. Die so entstandene Zufallszahl stellt deinen privaten SchlÃ¼ssel in B6 bzw. zur Basis 6 dar. Diesen 99 Zeichen langen Basis-6-SchlÃ¼ssel kannst du im obigen Eingabefeld eingeben und dir dann die zugehÃ¶rigen Details anzeigen lassen. U.a. wird dir die zu deinem privaten SchlÃ¼ssel gehÃ¶rende Bitcoin-Adresse angezeigt. Es wÃ¤re ratsam, sich die ebenfalls berechnete WIF-Version des privaten SchlÃ¼ssels zu notieren, weil sie hÃ¤ufiger genutzt wird."		
		},

		"cs": {
			// javascript alerts or messages
			"testneteditionactivated": "TESTNET aktivovÃ¡n",
			"paperlabelbitcoinaddress": "Bitcoin adresa:",
			"paperlabelprivatekey": "SoukromÃ½ klÃ­Ä (WIF &ndash; FormÃ¡t pro import do penÄ›Å¾enky):",
			"paperlabelencryptedkey": "Å ifrovanÃ½ soukromÃ½ klÃ­Ä (VyÅ¾adovÃ¡no heslo)",
			"bulkgeneratingaddresses": "Generuji adresy... ",
			"brainalertpassphrasetooshort": "ZadanÃ© heslo je pÅ™Ã­liÅ¡ krÃ¡tkÃ©.\n\n",
			"brainalertpassphrasewarning": "VarovÃ¡nÃ­: Je dÅ¯leÅ¾itÃ© zvolit silnÃ© heslo, kterÃ© je odolnÃ© proti Ãºtoku hrubou silou a krÃ¡deÅ¾i vaÅ¡ich BitcoinÅ¯.",
			"brainalertpassphrasedoesnotmatch": "Heslo nejsou stejnÃ¡.",
			"detailalertnotvalidprivatekey": "ZadanÃ½ text nenÃ­ platÃ½m soukromÃ½m klÃ­Äem",
			"detailconfirmsha256": "ZadanÃ½ text nenÃ­ platnÃ½m soukromÃ½m klÃ­Äem!\n\nChcete pouÅ¾Ã­t zadanÃ½ text jako heslo a vytvoÅ™it soukromÃ½ klÃ­Ä pomocÃ­ SHA256?\n\nVarovÃ¡nÃ­: Je dÅ¯leÅ¾itÃ© zvolit silnÃ© heslo, kterÃ© je odolnÃ© proti Ãºtoku hrubou silou a krÃ¡deÅ¾i vaÅ¡ich BitcoinÅ¯.",
			"bip38alertincorrectpassphrase": "Å patnÃ© heslo pro BIP38",
			"bip38alertpassphraserequired": "VyÅ¾adovÃ¡no heslo pro BIP38 klÃ­Ä",
			"vanityinvalidinputcouldnotcombinekeys": "Å patnÃ½ vstup. Kombinovat klÃ­Äe nenÃ­ moÅ¾nÃ©.",
			"vanityalertinvalidinputpublickeysmatch": "Å patnÃ½ vstup. VeÅ™ejnÃ½ klÃ­Ä obou poloÅ¾ek je shodnÃ½. MusÃ­te zadat dva rÅ¯znÃ© klÃ­Äe.",
			"vanityalertinvalidinputcannotmultiple": "Å patnÃ½ vstup. Dva veÅ™ejnÃ© klÃ­Äe nenÃ­ moÅ¾nÃ© nÃ¡sobit. Zvolte 'PÅ™idat' pro pÅ™idÃ¡nÃ­ dvou veÅ™ejnÃ½ch klÃ­ÄÅ¯ a zÃ­skÃ¡nÃ­ Bitcoin adresy.",
			"vanityprivatekeyonlyavailable": "DostupnÃ© pouze pÅ™i kombinaci dvou soukromÃ½ch klÃ­ÄÅ¯",
			"vanityalertinvalidinputprivatekeysmatch": "Å patnÃ½ vstup. SoukromÃ½ klÃ­Ä obou poloÅ¾ek je shodnÃ½. MusÃ­te zadat dva rÅ¯znÃ© klÃ­Äe.",

			// header and menu html
			"tagline": "Open Source generÃ¡tor Bitcoin penÄ›Å¾enky napsanÃ½ v JavaScript",
			"generatelabelbitcoinaddress": "Generuji Bitcoin adresu",
			"generatelabelmovemouse": "POHYBUJTE myÅ¡Ã­ pro zÃ­skÃ¡nÃ­ dostatku nÃ¡hody...",
			"generatelabelkeypress": "NEBO napiÅ¡te nÄ›kolik nÃ¡hodnÃ½ch znakÅ¯ do tohoto pole",
			"singlewallet": "Jedna penÄ›Å¾enka",
			"paperwallet": "PapÃ­rovÃ¡ penÄ›Å¾enka",
			"bulkwallet": "HromadnÃ¡ penÄ›Å¾enka",
			"brainwallet": "MyÅ¡lenkovÃ¡ penÄ›Å¾enka",
			"vanitywallet": "PenÄ›Å¾enka Vanity",
			"detailwallet": "Detail penÄ›Å¾enky",

			// footer html
			"footerlabeldonations": "PÅ™Ã­spÄ›vek:",
			"footerlabeltranslatedby": "PÅ™eklad: 1LNF2anjkH3HyRKrhMzVYqYRKFeDe2TJWz",
			"footerlabelpgp": "PGP",
			"footerlabelversion": "Historie verzÃ­",
			"footerlabelgithub": "GitHub Repository",
			"footerlabelcopyright1": "Copyright Cryptowallets.org.",
			"footerlabelcopyright2": "Copyright JavaScriptu je uveden ve zdrojovÃ©m kÃ³du.",
			"footerlabelnowarranty": "Bez zÃ¡ruky.",

			// single wallet html
			"newaddress": "VytvoÅ™it novou adresu",
			"singleprint": "Tisk",
			"singlelabelbitcoinaddress": "Bitcoin adresa",
			"singlelabelprivatekey": "SoukromÃ½ klÃ­Ä (WIF &ndash; FormÃ¡t pro import do penÄ›Å¾enky):",
			"singletip1": "<b>Bitcoin penÄ›Å¾enka</b> je jednoduchÃ½ pÃ¡r Bitcoin adresy s pÅ™idruÅ¾enÃ½m soukromÃ½m klÃ­Äem. TakovÃ¡ penÄ›Å¾enka byla prÃ¡vÄ› vytvoÅ™ena ve vaÅ¡em prohlÃ­Å¾eÄi a zobrazena vÃ½Å¡e.",
			"singletip2": "<b>Pro zabezpeÄenÃ­ tÃ©to penÄ›Å¾enky</b> musÃ­te tuto Bitcoin adresu a soukromÃ½ klÃ­Ä vytisknout a nebo jinak poznamenat. Je dÅ¯leÅ¾itÃ© provÃ©st zÃ¡lohu soukromÃ©ho klÃ­Äe a jeho uschovÃ¡nÃ­ na bezpeÄnÃ©m mÃ­stÄ›. Tato webovÃ¡ strÃ¡nka nemÃ¡ Å¾Ã¡dnÃ© informace o vaÅ¡em soukromÃ©m klÃ­Äi. Pokud ovlÃ¡dÃ¡te PGP, mÅ¯Å¾ete celou tuto strÃ¡nku stÃ¡hnout v jednom HTML souboru a ovÄ›Å™it jejÃ­ pravost srovnÃ¡nÃ­m SHA1 hashe s podepsanÃ½m dokumentem historie verzÃ­. Odkaz naleznete v patiÄce tÃ©to strÃ¡nky. Pokud opustÃ­te Äi obnovÃ­te tuto strÃ¡nku nebo kliknete na 'VytvoÅ™it novou adresu' dojde k vygenerovÃ¡nÃ­ novÃ©ho soukromÃ©ho klÃ­Äe a pÅ™edtÃ­m zobrazenÃ½ klÃ­Ä bude ztracen. VÃ¡Å¡ soukromÃ½ klÃ­Ä musÃ­te uchovat v tajnosti. KaÅ¾dÃ½ kdo mÃ¡ tento klÃ­Ä k dispozici mÅ¯Å¾e utratit vÅ¡echny penÃ­ze v tÃ©to penÄ›Å¾ence. Pokud budete penÄ›Å¾enku tisknout, uzavÅ™ete ji do nepropustnÃ©ho obalu nebo ji zalaminujte. TÃ­m zabrÃ¡nÃ­te jejÃ­mu poÅ¡kozenÃ­ vodou. Chovejte se k tÃ©to penÄ›Å¾ence jako k normÃ¡lnÃ­m bankovkÃ¡m.",
			"singletip3": "<b>Pro vloÅ¾enÃ­</b> penÄ›z do tÃ©to penÄ›Å¾enky staÄÃ­ zaslat penÃ­ze na Bitcoin adresu.",
			"singletip4": "<b>Zkontrolovat zÅ¯statek</b> mÅ¯Å¾ete na webovÃ© strÃ¡nce blockchain.info nebo blockexplorer.com po zadÃ¡nÃ­ Bitcoin adresy.",
			"singletip5": "<b>Utratit Bitcoiny</b> mÅ¯Å¾ete pomocÃ­ blockchain.info Äi mtgox.com naÄtenÃ­m celÃ©ho zÅ¯statku pomocÃ­ soukromÃ©ho klÃ­Äe do vaÅ¡eho ÃºÄtu. Utratit zÅ¯statek mÅ¯Å¾ete takÃ© pomocÃ­ jednoho z P2P Bitcoin klientÅ¯ naimportovÃ¡nÃ­m soukromÃ©ho klÃ­Äe. Myslete na to, Å¾e importem klÃ­Äe do klienta se stane souÄÃ¡stÃ­ jeho penÄ›Å¾enky. Pokud pÅ™evedete nÄ›komu penÃ­ze, nespotÅ™ebovanÃ½ zÅ¯statek se zaÅ¡le na jinou Bitcoin adresu uvedenou v P2P klienta. Tuto novou adresu musÃ­te vyzÃ¡lohovat a udrÅ¾ovat v bezpeÄÃ­. Satoshi doporuÄuje, Å¾e by nikdo nikdy nemÄ›l mazat penÄ›Å¾enku.",
			"singleshare": "SDÃLEJTE",
			"singlesecret": "SOUKROMÃ‰",

			// paper wallet html
			"paperlabelhideart": "SkrÃ½t grafiku?",
			"paperlabeladdressesperpage": "Adres na strÃ¡nku:",
			"paperlabeladdressestogenerate": "VytvoÅ™it adres:",
			"papergenerate": "VytvoÅ™it",
			"paperprint": "Tisk",
			"paperlabelBIPpassphrase": "Heslo:",
			"paperlabelencrypt": "Å ifrovat BIP38?",

			// bulk wallet html
			"bulklabelstartindex": "PoÄÃ¡tek:",
			"bulklabelrowstogenerate": "PoÄet Å™Ã¡dku k vytvoÅ™enÃ­:",
			"bulklabelcompressed": "KomprimovanÃ© adresy?",
			"bulkgenerate": "VytvoÅ™it",
			"bulkprint": "Tisk",
			"bulklabelcsv": "ÄŒÃ¡rkou oddÄ›lenÃ© hodnoty (CSV):",
			"bulklabelformat": "Index, Adresa, SoukromÃ½ klÃ­Ä (WIF &ndash; FormÃ¡t pro import do penÄ›Å¾enky)",
			"bulklabelq1": "ProÄ bych mÄ›l pouÅ¾Ã­vat Hromadnou penÄ›Å¾enku pro pÅ™Ã­jem BitcoinÅ¯ na mÃ© strÃ¡nce?",
			"bulka1": "TradiÄnÃ­ zpÅ¯sob jak pÅ™ijÃ­mat Bitcoiny na vaÅ¡Ã­ webovÃ© strÃ¡nce vyÅ¾aduje instalaci oficiÃ¡lnÃ­ho bitcoin klienta (\"bitcoind\"). Mnoho webhostingovÃ½ch spoleÄnostÃ­ neumoÅ¾Åˆuje tuto instalaci provÃ©st. TakÃ© bÄ›h bitcoin dÃ©mona na webovÃ©m serveru znamenÃ¡, Å¾e soukromÃ© klÃ­Äe jsou uloÅ¾eny na serveru a mohou bÃ½t ukradeny. Pokud pouÅ¾ijete Hromadnou penÄ›Å¾enku, tak staÄÃ­ na server nahrÃ¡t pouze veÅ™ejnou bitcoin adresu a ne soukromÃ© klÃ­Äe. PotÃ© se nemusÃ­te bÃ¡t, Å¾e vaÅ¡e Bitcoiny budou ukradeny v pÅ™Ã­padÄ› napadenÃ­ serveru.",
			"bulklabelq2": "JakÃ½m zpÅ¯sobem mohou pÅ™ijÃ­mat Bitcoiny na mÃ© strÃ¡nce pomocÃ­ HromadnÃ© penÄ›Å¾enky?",
			"bulklabela2li1": "PÅ™edgenerujte si velkÃ© mnoÅ¾stvÃ­ Bitcoin adres (10 000+). OkopÃ­rujte si CSV seznam do souboru na bezpeÄnÃ© mÃ­sto ve vaÅ¡em poÄÃ­taÄi. PotÃ© jej vyzÃ¡lohujte na bezpeÄnÃ© mÃ­sto.",
			"bulklabela2li2": "Naimportujte Bitcoin adresy do databÃ¡ze na vaÅ¡em webovÃ©m serveru. Neimportujte soukromÃ© klÃ­Äe, abyste zabrÃ¡nili krÃ¡deÅ¾i vaÅ¡ich penÄ›z.",
			"bulklabela2li3": "UmoÅ¾nÄ›te na vaÅ¡Ã­ strÃ¡nce platbu pomocÃ­ Bitcoinu. StaÄÃ­ vÅ¾dy zobrazit jednu z vygenerovanÃ½ch adres a uloÅ¾it si ji u objednÃ¡vky.",
			"bulklabela2li4": "NynÃ­ je jiÅ¾ pouze potÅ™eba zaÅ™Ã­dit notifikace o pÅ™Ã­chozÃ­ transakci. Zadejte do Google \"bitcoin payment notification\" a vyuÅ¾ijte jednu z existujÃ­cÃ­ch sluÅ¾eb. Existuje jich nÄ›kolik a podporujÃ­ napÅ™. Web Services, API, SMS, Email, apod. Notifikaci mÅ¯Å¾ete zpracovat automaticky. Pro ruÄnÃ­ kontrolu, zda penÃ­ze pÅ™iÅ¡ly, staÄÃ­ pouÅ¾Ã­t Block Explorer. NahraÄte SEMPATÅ˜ÃADRESA Bitcoin adresou, kterou chcete zkontrolovat. PotvrzenÃ­ transkace mÅ¯Å¾e trvat od 10 minut do jednÃ© hodiny.<br />http://www.blockexplorer.com/address/SEMPATÅ˜ÃADRESA<br /><br />NepotvrzenÃ© tansakce je moÅ¾nÃ© zkontrolovat na: http://blockchain.info/ <br />VÄ›tÅ¡inou se zde zobrazÃ­ do 30 sekund.",
			"bulklabela2li5": "Bitcoiny budou bezpeÄnÄ› pÅ™evedeny v Å™etÄ›zci blokÅ¯. Pro spotÅ™ebovÃ¡nÃ­ staÄÃ­ kdykoliv naimportovat soubor vygenerovanÃ½ v prvnÃ­m kroku.",

			// brain wallet html
			"brainlabelenterpassphrase": "Zadejte heslo:",
			"brainlabelshow": "Zobrazit?",
			"brainprint": "Tisk",
			"brainlabelconfirm": "Heslo znovu:",
			"brainview": "Zobrazit",
			"brainalgorithm": "Algoritmus: SHA256 (Heslo)",
			"brainlabelbitcoinaddress": "Bitcoin adresa:",
			"brainlabelprivatekey": "SoukromÃ½ klÃ­Ä (WIF &ndash; FormÃ¡t pro import do penÄ›Å¾enky):",

			// vanity wallet html
			"vanitylabelstep1": "Krok 1 &ndash; VytvoÅ™te klÃ­Ä pro prvnÃ­ krok",
			"vanitynewkeypair": "VytvoÅ™it",
			"vanitylabelstep1publickey": "VeÅ™ejnÃ½ klÃ­Ä 1. kroku",
			"vanitylabelstep1pubnotes": "ZkopÃ­rujte a vloÅ¾te vÃ½Å¡e uvedenÃ½ klÃ­Ä do pole Your-Part-Public-Key na Vanity Pool strÃ¡nce.",
			"vanitylabelstep1privatekey": "SoukromÃ½ klÃ­Ä 1. kroku",
			"vanitylabelstep1privnotes": "ZkopÃ­rujte a uschovejte uvedenÃ½ soukromÃ½ klÃ­Ä. IdeÃ¡lnÄ› na Å¡ifrovanÃ½ disk. Budete ho potÅ™ebovat pro zÃ­skÃ¡nÃ­ vaÅ¡eho Bitcoin soukromÃ©ho klÃ­Äe potÃ©, co pool nalezne zaÄÃ¡tek.",
			"vanitylabelstep2calculateyourvanitywallet": "Krok 2 &ndash; VÃ½poÄet penÄ›Å¾enky Vanity",
			"vanitylabelenteryourpart": "Zadejte vaÅ¡i ÄÃ¡st soukromÃ©ho klÃ­Äe (vygenerovanÃ½ a uloÅ¾enÃ½ v prvnÃ­m kroku vÃ½Å¡e):",
			"vanitylabelenteryourpoolpart": "Zadejte pool ÄÃ¡st soukromÃ©ho klÃ­Äe (z Vanity Poolu):",
			"vanitylabelnote1": "[POZNÃMKA: do tohoto pole mÅ¯Å¾ete zadat veÅ™ejnÃ½ nebo soukromÃ½ klÃ­Ä]",
			"vanitylabelnote2": "[POZNÃMKA: do tohoto pole mÅ¯Å¾ete zadat veÅ™ejnÃ½ nebo soukromÃ½ klÃ­Ä]",
			"vanitylabelradioadd": "SeÄÃ­st",
			"vanitylabelradiomultiply": "NÃ¡sobit",
			"vanitycalc": "SpoÄÃ­tÃ¡t penÄ›Å¾enku Vanity",
			"vanitylabelbitcoinaddress": "Bitcoin adresa Vanity:",
			"vanitylabelnotesbitcoinaddress": "VÃ½Å¡e je vaÅ¡e novÃ¡ adresa, kterÃ¡ by mÄ›la obsahovat poÅ¾adovanÃ½ zaÄÃ¡tek.",
			"vanitylabelpublickeyhex": "VeÅ™ejnÃ½ klÃ­Ä Vanity (HEX):",
			"vanitylabelnotespublickeyhex": "VÃ½Å¡e je veÅ™ejnÃ½ klÃ­Ä v hexadecimÃ¡lnÃ­m formÃ¡tu.",
			"vanitylabelprivatekey": "SoukromÃ½ klÃ­Ä Vanity (WIF):",
			"vanitylabelnotesprivatekey": "VÃ½Å¡e je soukromÃ½ klÃ­Ä pro naÄtenÃ­ do vaÅ¡Ã­ penÄ›Å¾enky.",

			// detail wallet html
			"detaillabelenterprivatekey": "Zadejte soukromÃ½ klÃ­Ä:",
			"detailkeyformats": "PodporovanÃ© formÃ¡ty: WIF, WIFC, HEX, B64, B6, MINI, BIP38",
			"detailview": "Zobrazit detail",
			"detailprint": "Tisk",
			"detaillabelnote1": "",
			"detaillabelnote2": "",
			"detaillabelbitcoinaddress": "Bitcoin adresa:",
			"detaillabelbitcoinaddresscomp": "KomprimovanÃ¡ bitcoin adresa:",
			"detaillabelpublickey": "VeÅ™ejnÃ½ klÃ­Ä (130 znakÅ¯ [0-9A-F]):",
			"detaillabelpublickeycomp": "KomprimovanÃ½ veÅ™ejnÃ½ klÃ­Ä (66 znakÅ¯ [0-9A-F]):",
			"detaillabelprivwif": "SoukromÃ½ klÃ­Ä WIF  <br />51 znakÅ¯ v base58, zaÄÃ­nÃ¡ '5'",
			"detaillabelprivwifcomp": "KomprimovanÃ½ soukromÃ½ klÃ­Ä WIF <br />52 znakÅ¯ v base58, zaÄÃ­nÃ¡",
			"detailcompwifprefix": "'K' nebo 'L'",
			"detaillabelprivhex": "SoukromÃ½ klÃ­Ä v hexadecimÃ¡lnÃ­m formÃ¡tÅ¯ (64 znakÅ¯ [0-9A-F]):",
			"detaillabelprivb64": "SoukromÃ½ klÃ­Ä v base64 (44 znakÅ¯):",
			"detaillabelprivmini": "SoukromÃ½ klÃ­Ä v mini formÃ¡tÅ¯ (22, 26 nebo 30 znakÅ¯, zaÄÃ­nÃ¡ 'S'):",
			"detaillabelpassphrase": "Zadejte BIP38 heslo:",
			"detaildecrypt": "DeÅ¡ifrovat",
			"detaillabelq1": "Jak si mohu vytvoÅ™it penÄ›Å¾enku pomocÃ­ hracÃ­ kostky? Co je to B6?",
			"detaila1": "DÅ¯leÅ¾itÃ¡ souÄÃ¡st vytvÃ¡Å™enÃ­ Bitcoin penÄ›Å¾enky je jistota, Å¾e nÃ¡hodnÃ¡ ÄÃ­sla pouÅ¾itÃ¡ pro jejÃ­ tvorbu jsou opravdu nÃ¡hodnÃ¡. FyzickÃ¡ nÃ¡hoda je lepÅ¡Ã­ neÅ¾ poÄÃ­taÄem generovanÃ¡ pseudonÃ¡hoda. PomocÃ­ hracÃ­ kostky je moÅ¾nÃ© jednoduÅ¡e zÃ­skat fyzicky nÃ¡hodnÃ¡ ÄÃ­sla. Pro vytvoÅ™enÃ­ soukromÃ©ho klÃ­Äe potÅ™ebujete pouze Å¡estihrannou kostku, kterou 99x hodÃ­te. KaÅ¾dÃ½ tento hod zaznamenejte. PÅ™i zapisovÃ¡nÃ­ pÅ™eveÄte ÄÃ­sla takto: 1=1, 2=2, 3=3, 4=4, 5=5, 6=0. PomocÃ­ tÃ©to techniky zapisujete velkÃ©, opravdu nÃ¡hodnÃ© ÄÃ­slo, svÅ¯j soukromÃ½ klÃ­Ä v B6 nebo takÃ© base 6 formÃ¡tu. TÄ›chto 99 ÄÃ­sel napiÅ¡te do pole vÃ½Å¡e a kliknÄ›te na Zobrazit detail. PotÃ© se vÃ¡m zobrazÃ­ Bitcoin adresa pÅ™idruÅ¾enÃ¡ k tomuto soukromÃ©mu klÃ­Äi. SoukromÃ½ klÃ­Ä byste si mÄ›li zaznamenat takÃ© ve WIF formÃ¡tu, kterÃ½ je Å¡iroce pouÅ¾Ã­vÃ¡n."
		},
	}
};

ninja.translator.showEnglishJson = function () {
	var english = ninja.translator.translations["en"];
	var spanish = ninja.translator.translations["es"];
	var spanishClone = {};
	for (var key in spanish) {
		spanishClone[key] = spanish[key];
	}
	var newLang = {};
	for (var key in english) {
		newLang[key] = english[key];
		delete spanishClone[key];
	}
	for (var key in spanishClone) {
		if (document.getElementById(key)) {
			if (document.getElementById(key).value) {
				newLang[key] = document.getElementById(key).value;
			}
			else {
				newLang[key] = document.getElementById(key).innerHTML;
			}
		}
	}
	var div = document.createElement("div");
	div.setAttribute("class", "englishjson");
	div.innerHTML = "<h3>English Json</h3>";
	var elem = document.createElement("textarea");
	elem.setAttribute("rows", "15");
	elem.setAttribute("cols", "110");
	elem.setAttribute("wrap", "off");
	var langJson = "{\n";
	for (var key in newLang) {
		langJson += "\t\"" + key + "\"" + ": " + "\"" + newLang[key].replace(/\"/g, "\\\"").replace(/\n/g, "\\n") + "\",\n";
	}
	langJson = langJson.substr(0, langJson.length - 2);
	langJson += "\n}\n";
	elem.innerHTML = langJson;
	div.appendChild(elem);
	document.body.appendChild(div);
};

	</script>
	<script type="text/javascript">
ninja.wallets.singlewallet = {
	open: function () {
		if (document.getElementById("btcaddress").innerHTML == "") {
			ninja.wallets.singlewallet.generateNewAddressAndKey();
		}
		document.getElementById("singlearea").style.display = "block";
	},

	close: function () {
		document.getElementById("singlearea").style.display = "none";
	},

	// generate bitcoin address and private key and update information in the HTML
	generateNewAddressAndKey: function () {
		try {
			var key = new Bitcoin.ECKey(false);
			var bitcoinAddress = key.getBitcoinAddress();
			var privateKeyWif = key.getBitcoinWalletImportFormat();
			document.getElementById("btcaddress").innerHTML = bitcoinAddress;
			document.getElementById("btcprivwif").innerHTML = privateKeyWif;
			var keyValuePair = {
				"qrcode_public": bitcoinAddress,
				"qrcode_private": privateKeyWif
			};
			ninja.qrCode.showQrCode(keyValuePair, 4);
		}
		catch (e) {
			// browser does not have sufficient JavaScript support to generate a bitcoin address
			alert(e);
			document.getElementById("btcaddress").innerHTML = "error";
			document.getElementById("btcprivwif").innerHTML = "error";
			document.getElementById("qrcode_public").innerHTML = "";
			document.getElementById("qrcode_private").innerHTML = "";
		}
	}
};
	</script>
	<script type="text/javascript">
ninja.wallets.paperwallet = {
	open: function () {
		document.getElementById("main").setAttribute("class", "paper"); // add 'paper' class to main div
		var paperArea = document.getElementById("paperarea");
		paperArea.style.display = "block";
		var perPageLimitElement = document.getElementById("paperlimitperpage");
		var limitElement = document.getElementById("paperlimit");
		var pageBreakAt = (ninja.wallets.paperwallet.useArtisticWallet) ? ninja.wallets.paperwallet.pageBreakAtArtisticDefault : ninja.wallets.paperwallet.pageBreakAtDefault;
		if (perPageLimitElement && perPageLimitElement.value < 1) {
			perPageLimitElement.value = pageBreakAt;
		}
		if (limitElement && limitElement.value < 1) {
			limitElement.value = pageBreakAt;
		}
		if (document.getElementById("paperkeyarea").innerHTML == "") {
			document.getElementById("paperpassphrase").disabled = true;
			document.getElementById("paperencrypt").checked = false;
			ninja.wallets.paperwallet.encrypt = false;
			ninja.wallets.paperwallet.build(pageBreakAt, pageBreakAt, !document.getElementById('paperart').checked, document.getElementById('paperpassphrase').value);
		}
	},

	close: function () {
		document.getElementById("paperarea").style.display = "none";
		document.getElementById("main").setAttribute("class", ""); // remove 'paper' class from main div
	},

	remaining: null, // use to keep track of how many addresses are left to process when building the paper wallet
	count: 0,
	pageBreakAtDefault: 7,
	pageBreakAtArtisticDefault: 3,
	useArtisticWallet: true,
	pageBreakAt: null,

	build: function (numWallets, pageBreakAt, useArtisticWallet, passphrase) {
		if (numWallets < 1) numWallets = 1;
		if (pageBreakAt < 1) pageBreakAt = 1;
		ninja.wallets.paperwallet.remaining = numWallets;
		ninja.wallets.paperwallet.count = 0;
		ninja.wallets.paperwallet.useArtisticWallet = useArtisticWallet;
		ninja.wallets.paperwallet.pageBreakAt = pageBreakAt;
		document.getElementById("paperkeyarea").innerHTML = "";
		if (ninja.wallets.paperwallet.encrypt) {
			if (passphrase == "") {
				alert(ninja.translator.get("bip38alertpassphraserequired"));
				return;
			}
			document.getElementById("busyblock").className = "busy";
			ninja.privateKey.BIP38GenerateIntermediatePointAsync(passphrase, null, null, function (intermediate) {
				ninja.wallets.paperwallet.intermediatePoint = intermediate;
				document.getElementById("busyblock").className = "";
				setTimeout(ninja.wallets.paperwallet.batch, 0);
			});
		}
		else {
			setTimeout(ninja.wallets.paperwallet.batch, 0);
		}
	},

	batch: function () {
		if (ninja.wallets.paperwallet.remaining > 0) {
			var paperArea = document.getElementById("paperkeyarea");
			ninja.wallets.paperwallet.count++;
			var i = ninja.wallets.paperwallet.count;
			var pageBreakAt = ninja.wallets.paperwallet.pageBreakAt;
			var div = document.createElement("div");
			div.setAttribute("id", "keyarea" + i);
			if (ninja.wallets.paperwallet.useArtisticWallet) {
				div.innerHTML = ninja.wallets.paperwallet.templateArtisticHtml(i);
				div.setAttribute("class", "keyarea art");
			}
			else {
				div.innerHTML = ninja.wallets.paperwallet.templateHtml(i);
				div.setAttribute("class", "keyarea");
			}
			if (paperArea.innerHTML != "") {
				// page break
				if ((i - 1) % pageBreakAt == 0 && i >= pageBreakAt) {
					var pBreak = document.createElement("div");
					pBreak.setAttribute("class", "pagebreak");
					document.getElementById("paperkeyarea").appendChild(pBreak);
					div.style.pageBreakBefore = "always";
					if (!ninja.wallets.paperwallet.useArtisticWallet) {
						div.style.borderTop = "2px solid rgb(4, 130, 230)";
					}
				}
			}
			document.getElementById("paperkeyarea").appendChild(div);
			ninja.wallets.paperwallet.generateNewWallet(i);
			ninja.wallets.paperwallet.remaining--;
			setTimeout(ninja.wallets.paperwallet.batch, 0);
		}
	},

	// generate bitcoin address, private key, QR Code and update information in the HTML
	// idPostFix: 1, 2, 3, etc.
	generateNewWallet: function (idPostFix) {
		if (ninja.wallets.paperwallet.encrypt) {
			ninja.privateKey.BIP38GenerateECAddressAsync(ninja.wallets.paperwallet.intermediatePoint, false, function (address, encryptedKey) {
				if (ninja.wallets.paperwallet.useArtisticWallet) {
					ninja.wallets.paperwallet.showArtisticWallet(idPostFix, address, encryptedKey);
				}
				else {
					ninja.wallets.paperwallet.showWallet(idPostFix, address, encryptedKey);
				}
			});
		}
		else {
			var key = new Bitcoin.ECKey(false);
			var bitcoinAddress = key.getBitcoinAddress();
			var privateKeyWif = key.getBitcoinWalletImportFormat();
			if (ninja.wallets.paperwallet.useArtisticWallet) {
				ninja.wallets.paperwallet.showArtisticWallet(idPostFix, bitcoinAddress, privateKeyWif);
			}
			else {
				ninja.wallets.paperwallet.showWallet(idPostFix, bitcoinAddress, privateKeyWif);
			}
		}
	},

	templateHtml: function (i) {
		var privateKeyLabel = ninja.translator.get("paperlabelprivatekey");
		if (ninja.wallets.paperwallet.encrypt) {
			privateKeyLabel = ninja.translator.get("paperlabelencryptedkey");
		}

		var walletHtml =
							"<div class='public'>" +
								"<div id='qrcode_public" + i + "' class='qrcode_public'></div>" +
								"<div class='pubaddress'>" +
									"<span class='label'>" + ninja.translator.get("paperlabelbitcoinaddress") + "</span>" +
									"<span class='output' id='btcaddress" + i + "'></span>" +
								"</div>" +
							"</div>" +
							"<div class='private'>" +
								"<div id='qrcode_private" + i + "' class='qrcode_private'></div>" +
								"<div class='privwif'>" +
									"<span class='label'>" + privateKeyLabel + "</span>" +
									"<span class='output' id='btcprivwif" + i + "'></span>" +
								"</div>" +
							"</div>";
		return walletHtml;
	},

	showWallet: function (idPostFix, bitcoinAddress, privateKey) {
		document.getElementById("btcaddress" + idPostFix).innerHTML = bitcoinAddress;
		document.getElementById("btcprivwif" + idPostFix).innerHTML = privateKey;
		var keyValuePair = {};
		keyValuePair["qrcode_public" + idPostFix] = bitcoinAddress;
		keyValuePair["qrcode_private" + idPostFix] = privateKey;
		ninja.qrCode.showQrCode(keyValuePair);
		document.getElementById("keyarea" + idPostFix).style.display = "block";
	},

	templateArtisticHtml: function (i) {
		var keyelement = 'btcprivwif';
		var image;
		if (ninja.wallets.paperwallet.encrypt) {
			keyelement = 'btcencryptedkey'
			image = '<?php echo $base64 ?>';
		}
		else {
			image = '<?php echo $base64 ?>';

		}

		var walletHtml =
							"<div class='artwallet' id='artwallet" + i + "'>" +
		//"<iframe src='bitcoin-wallet-01.svg' id='papersvg" + i + "' class='papersvg' ></iframe>" +
								"<img id='papersvg" + i + "' class='papersvg' src='<?php echo $base64 ?>' />" +
								"<div id='qrcode_public" + i + "' class='qrcode_public'></div>" +
								"<div id='qrcode_private" + i + "' class='qrcode_private'></div>" +
								"<div class='btcaddress' id='btcaddress" + i + "'></div>" +
								"<div class='" + keyelement + "' id='" + keyelement + i + "'></div>" +
							"</div>";
		return walletHtml;
	},

	showArtisticWallet: function (idPostFix, bitcoinAddress, privateKey) {
		var keyValuePair = {};
		keyValuePair["qrcode_public" + idPostFix] = bitcoinAddress;
		keyValuePair["qrcode_private" + idPostFix] = privateKey;
		ninja.qrCode.showQrCode(keyValuePair, 2.5);
		document.getElementById("btcaddress" + idPostFix).innerHTML = bitcoinAddress;

		if (ninja.wallets.paperwallet.encrypt) {
			var half = privateKey.length / 2;
			document.getElementById("btcencryptedkey" + idPostFix).innerHTML = privateKey.slice(0, half) + '<br />' + privateKey.slice(half);
		}
		else {
			document.getElementById("btcprivwif" + idPostFix).innerHTML = privateKey;
		}

		// CODE to modify SVG DOM elements
		//var paperSvg = document.getElementById("papersvg" + idPostFix);
		//if (paperSvg) {
		//	svgDoc = paperSvg.contentDocument;
		//	if (svgDoc) {
		//		var bitcoinAddressElement = svgDoc.getElementById("bitcoinaddress");
		//		var privateKeyElement = svgDoc.getElementById("privatekey");
		//		if (bitcoinAddressElement && privateKeyElement) {
		//			bitcoinAddressElement.textContent = bitcoinAddress;
		//			privateKeyElement.textContent = privateKeyWif;
		//		}
		//	}
		//}
	},

	toggleArt: function (element) {
		ninja.wallets.paperwallet.resetLimits();
	},

	toggleEncrypt: function (element) {
		// enable/disable passphrase textbox
		document.getElementById("paperpassphrase").disabled = !element.checked;
		ninja.wallets.paperwallet.encrypt = element.checked;
		ninja.wallets.paperwallet.resetLimits();
	},

	resetLimits: function () {
		var hideArt = document.getElementById("paperart");
		var paperEncrypt = document.getElementById("paperencrypt");
		var limit;
		var limitperpage;

		document.getElementById("paperkeyarea").style.fontSize = "100%";
		if (!hideArt.checked) {
			limit = ninja.wallets.paperwallet.pageBreakAtArtisticDefault;
			limitperpage = ninja.wallets.paperwallet.pageBreakAtArtisticDefault;
		}
		else if (hideArt.checked && paperEncrypt.checked) {
			limit = ninja.wallets.paperwallet.pageBreakAtDefault;
			limitperpage = ninja.wallets.paperwallet.pageBreakAtDefault;
			// reduce font size
			document.getElementById("paperkeyarea").style.fontSize = "95%";
		}
		else if (hideArt.checked && !paperEncrypt.checked) {
			limit = ninja.wallets.paperwallet.pageBreakAtDefault;
			limitperpage = ninja.wallets.paperwallet.pageBreakAtDefault;
		}
		document.getElementById("paperlimitperpage").value = limitperpage;
		document.getElementById("paperlimit").value = limit;
	}
};
	</script>
	<script type="text/javascript">
ninja.wallets.bulkwallet = {
	open: function () {
		document.getElementById("bulkarea").style.display = "block";
		// show a default CSV list if the text area is empty
		if (document.getElementById("bulktextarea").value == "") {
			// return control of the thread to the browser to render the tab switch UI then build a default CSV list
			setTimeout(function () { ninja.wallets.bulkwallet.buildCSV(3, 1, document.getElementById("bulkcompressed").checked); }, 200);
		}
	},

	close: function () {
		document.getElementById("bulkarea").style.display = "none";
	},

	// use this function to bulk generate addresses
	// rowLimit: number of Bitcoin Addresses to generate
	// startIndex: add this number to the row index for output purposes
	// returns:
	// index,bitcoinAddress,privateKeyWif
	buildCSV: function (rowLimit, startIndex, compressedAddrs) {
		var bulkWallet = ninja.wallets.bulkwallet;
		document.getElementById("bulktextarea").value = ninja.translator.get("bulkgeneratingaddresses") + rowLimit;
		bulkWallet.csv = [];
		bulkWallet.csvRowLimit = rowLimit;
		bulkWallet.csvRowsRemaining = rowLimit;
		bulkWallet.csvStartIndex = --startIndex;
		bulkWallet.compressedAddrs = !!compressedAddrs;
		setTimeout(bulkWallet.batchCSV, 0);
	},

	csv: [],
	csvRowsRemaining: null, // use to keep track of how many rows are left to process when building a large CSV array
	csvRowLimit: 0,
	csvStartIndex: 0,

	batchCSV: function () {
		var bulkWallet = ninja.wallets.bulkwallet;
		if (bulkWallet.csvRowsRemaining > 0) {
			bulkWallet.csvRowsRemaining--;
			var key = new Bitcoin.ECKey(false);
			key.setCompressed(bulkWallet.compressedAddrs);

			bulkWallet.csv.push((bulkWallet.csvRowLimit - bulkWallet.csvRowsRemaining + bulkWallet.csvStartIndex)
								+ ",\"" + key.getBitcoinAddress() + "\",\"" + key.toString("wif")
			//+	"\",\"" + key.toString("wifcomp")    // uncomment these lines to add different private key formats to the CSV
			//+ "\",\"" + key.getBitcoinHexFormat() 
			//+ "\",\"" + key.toString("base64") 
								+ "\"");

			document.getElementById("bulktextarea").value = ninja.translator.get("bulkgeneratingaddresses") + bulkWallet.csvRowsRemaining;

			// release thread to browser to render UI
			setTimeout(bulkWallet.batchCSV, 0);
		}
		// processing is finished so put CSV in text area
		else if (bulkWallet.csvRowsRemaining === 0) {
			document.getElementById("bulktextarea").value = bulkWallet.csv.join("\n");
		}
	},

	openCloseFaq: function (faqNum) {
		// do close
		if (document.getElementById("bulka" + faqNum).style.display == "block") {
			document.getElementById("bulka" + faqNum).style.display = "none";
			document.getElementById("bulke" + faqNum).setAttribute("class", "more");
		}
		// do open
		else {
			document.getElementById("bulka" + faqNum).style.display = "block";
			document.getElementById("bulke" + faqNum).setAttribute("class", "less");
		}
	}
};
	</script>
	<script type="text/javascript">
ninja.wallets.brainwallet = {
	open: function () {
		document.getElementById("brainarea").style.display = "block";
		document.getElementById("brainpassphrase").focus();
		document.getElementById("brainwarning").innerHTML = ninja.translator.get("brainalertpassphrasewarning");
	},

	close: function () {
		document.getElementById("brainarea").style.display = "none";
	},

	minPassphraseLength: 15,

	view: function () {
		var key = document.getElementById("brainpassphrase").value.toString().replace(/^\s+|\s+$/g, ""); // trim white space
		document.getElementById("brainpassphrase").value = key;
		var keyConfirm = document.getElementById("brainpassphraseconfirm").value.toString().replace(/^\s+|\s+$/g, ""); // trim white space
		document.getElementById("brainpassphraseconfirm").value = keyConfirm;

		if (key == keyConfirm || document.getElementById("brainpassphraseshow").checked) {
			// enforce a minimum passphrase length
			if (key.length >= ninja.wallets.brainwallet.minPassphraseLength) {
				var bytes = Crypto.SHA256(key, { asBytes: true });
				var btcKey = new Bitcoin.ECKey(bytes);
				var bitcoinAddress = btcKey.getBitcoinAddress();
				var privWif = btcKey.getBitcoinWalletImportFormat();
				document.getElementById("brainbtcaddress").innerHTML = bitcoinAddress;
				document.getElementById("brainbtcprivwif").innerHTML = privWif;
				ninja.qrCode.showQrCode({
					"brainqrcodepublic": bitcoinAddress,
					"brainqrcodeprivate": privWif
				});
				document.getElementById("brainkeyarea").style.visibility = "visible";
			}
			else {
				alert(ninja.translator.get("brainalertpassphrasetooshort") + ninja.translator.get("brainalertpassphrasewarning"));
				ninja.wallets.brainwallet.clear();
			}
		}
		else {
			alert(ninja.translator.get("brainalertpassphrasedoesnotmatch"));
			ninja.wallets.brainwallet.clear();
		}
	},

	clear: function () {
		document.getElementById("brainkeyarea").style.visibility = "hidden";
	},

	showToggle: function (element) {
		if (element.checked) {
			document.getElementById("brainpassphrase").setAttribute("type", "text");
			document.getElementById("brainpassphraseconfirm").style.visibility = "hidden";
			document.getElementById("brainlabelconfirm").style.visibility = "hidden";
		}
		else {
			document.getElementById("brainpassphrase").setAttribute("type", "password");
			document.getElementById("brainpassphraseconfirm").style.visibility = "visible";
			document.getElementById("brainlabelconfirm").style.visibility = "visible";
		}
	}
};
	</script>
	<script type="text/javascript">
ninja.wallets.vanitywallet = {
	open: function () {
		document.getElementById("vanityarea").style.display = "block";
	},

	close: function () {
		document.getElementById("vanityarea").style.display = "none";
		document.getElementById("vanitystep1area").style.display = "none";
		document.getElementById("vanitystep2area").style.display = "none";
		document.getElementById("vanitystep1icon").setAttribute("class", "more");
		document.getElementById("vanitystep2icon").setAttribute("class", "more");
	},

	generateKeyPair: function () {
		var key = new Bitcoin.ECKey(false);
		var publicKey = key.getPubKeyHex();
		var privateKey = key.getBitcoinHexFormat();
		document.getElementById("vanitypubkey").innerHTML = publicKey;
		document.getElementById("vanityprivatekey").innerHTML = privateKey;
		document.getElementById("vanityarea").style.display = "block";
		document.getElementById("vanitystep1area").style.display = "none";
	},

	addKeys: function () {
		var privateKeyWif = ninja.translator.get("vanityinvalidinputcouldnotcombinekeys");
		var bitcoinAddress = ninja.translator.get("vanityinvalidinputcouldnotcombinekeys");
		var publicKeyHex = ninja.translator.get("vanityinvalidinputcouldnotcombinekeys");
		try {
			var input1KeyString = document.getElementById("vanityinput1").value;
			var input2KeyString = document.getElementById("vanityinput2").value;

			// both inputs are public keys
			if (ninja.publicKey.isPublicKeyHexFormat(input1KeyString) && ninja.publicKey.isPublicKeyHexFormat(input2KeyString)) {
				// add both public keys together
				if (document.getElementById("vanityradioadd").checked) {
					var pubKeyByteArray = ninja.publicKey.getByteArrayFromAdding(input1KeyString, input2KeyString);
					if (pubKeyByteArray == null) {
						alert(ninja.translator.get("vanityalertinvalidinputpublickeysmatch"));
					}
					else {
						privateKeyWif = ninja.translator.get("vanityprivatekeyonlyavailable");
						bitcoinAddress = ninja.publicKey.getBitcoinAddressFromByteArray(pubKeyByteArray);
						publicKeyHex = ninja.publicKey.getHexFromByteArray(pubKeyByteArray);
					}
				}
				else {
					alert(ninja.translator.get("vanityalertinvalidinputcannotmultiple"));
				}
			}
			// one public key and one private key
			else if ((ninja.publicKey.isPublicKeyHexFormat(input1KeyString) && ninja.privateKey.isPrivateKey(input2KeyString))
							|| (ninja.publicKey.isPublicKeyHexFormat(input2KeyString) && ninja.privateKey.isPrivateKey(input1KeyString))
						) {
				privateKeyWif = ninja.translator.get("vanityprivatekeyonlyavailable");
				var pubKeyHex = (ninja.publicKey.isPublicKeyHexFormat(input1KeyString)) ? input1KeyString : input2KeyString;
				var ecKey = (ninja.privateKey.isPrivateKey(input1KeyString)) ? new Bitcoin.ECKey(input1KeyString) : new Bitcoin.ECKey(input2KeyString);
				// add 
				if (document.getElementById("vanityradioadd").checked) {
					var pubKeyCombined = ninja.publicKey.getByteArrayFromAdding(pubKeyHex, ecKey.getPubKeyHex());
				}
				// multiply
				else {
					var pubKeyCombined = ninja.publicKey.getByteArrayFromMultiplying(pubKeyHex, ecKey);
				}
				if (pubKeyCombined == null) {
					alert(ninja.translator.get("vanityalertinvalidinputpublickeysmatch"));
				} else {
					bitcoinAddress = ninja.publicKey.getBitcoinAddressFromByteArray(pubKeyCombined);
					publicKeyHex = ninja.publicKey.getHexFromByteArray(pubKeyCombined);
				}
			}
			// both inputs are private keys
			else if (ninja.privateKey.isPrivateKey(input1KeyString) && ninja.privateKey.isPrivateKey(input2KeyString)) {
				var combinedPrivateKey;
				// add both private keys together
				if (document.getElementById("vanityradioadd").checked) {
					combinedPrivateKey = ninja.privateKey.getECKeyFromAdding(input1KeyString, input2KeyString);
				}
				// multiply both private keys together
				else {
					combinedPrivateKey = ninja.privateKey.getECKeyFromMultiplying(input1KeyString, input2KeyString);
				}
				if (combinedPrivateKey == null) {
					alert(ninja.translator.get("vanityalertinvalidinputprivatekeysmatch"));
				}
				else {
					bitcoinAddress = combinedPrivateKey.getBitcoinAddress();
					privateKeyWif = combinedPrivateKey.getBitcoinWalletImportFormat();
					publicKeyHex = combinedPrivateKey.getPubKeyHex();
				}
			}
		} catch (e) {
			alert(e);
		}
		document.getElementById("vanityprivatekeywif").innerHTML = privateKeyWif;
		document.getElementById("vanityaddress").innerHTML = bitcoinAddress;
		document.getElementById("vanitypublickeyhex").innerHTML = publicKeyHex;
		document.getElementById("vanitystep2area").style.display = "block";
		document.getElementById("vanitystep2icon").setAttribute("class", "less");
	},

	openCloseStep: function (num) {
		// do close
		if (document.getElementById("vanitystep" + num + "area").style.display == "block") {
			document.getElementById("vanitystep" + num + "area").style.display = "none";
			document.getElementById("vanitystep" + num + "icon").setAttribute("class", "more");
		}
		// do open
		else {
			document.getElementById("vanitystep" + num + "area").style.display = "block";
			document.getElementById("vanitystep" + num + "icon").setAttribute("class", "less");
		}
	}
};
	</script>
	<script type="text/javascript">
ninja.wallets.detailwallet = {
	open: function () {
		document.getElementById("detailarea").style.display = "block";
		document.getElementById("detailprivkey").focus();
	},

	close: function () {
		document.getElementById("detailarea").style.display = "none";
	},

	openCloseFaq: function (faqNum) {
		// do close
		if (document.getElementById("detaila" + faqNum).style.display == "block") {
			document.getElementById("detaila" + faqNum).style.display = "none";
			document.getElementById("detaile" + faqNum).setAttribute("class", "more");
		}
		// do open
		else {
			document.getElementById("detaila" + faqNum).style.display = "block";
			document.getElementById("detaile" + faqNum).setAttribute("class", "less");
		}
	},

	viewDetails: function () {
		var bip38 = false;
		var key = document.getElementById("detailprivkey").value.toString().replace(/^\s+|\s+$/g, ""); // trim white space
		document.getElementById("detailprivkey").value = key;
		var bip38CommandDisplay = document.getElementById("detailbip38commands").style.display;
		ninja.wallets.detailwallet.clear();
		if (key == "") {
			return;
		}
		if (ninja.privateKey.isBIP38Format(key)) {
			document.getElementById("detailbip38commands").style.display = bip38CommandDisplay;
			if (bip38CommandDisplay != "block") {
				document.getElementById("detailbip38commands").style.display = "block";
				document.getElementById("detailprivkeypassphrase").focus();
				return;
			}
			var passphrase = document.getElementById("detailprivkeypassphrase").value.toString().replace(/^\s+|\s+$/g, ""); // trim white space
			if (passphrase == "") {
				alert(ninja.translator.get("bip38alertpassphraserequired"));
				return;
			}
			document.getElementById("busyblock").className = "busy";
			// show Private Key BIP38 Format
			document.getElementById("detailprivbip38").innerHTML = key;
			document.getElementById("detailbip38").style.display = "block";
			ninja.privateKey.BIP38EncryptedKeyToByteArrayAsync(key, passphrase, function (btcKeyOrError) {
				document.getElementById("busyblock").className = "";
				if (btcKeyOrError.message) {
					alert(btcKeyOrError.message);
					ninja.wallets.detailwallet.clear();
				} else {
					ninja.wallets.detailwallet.populateKeyDetails(new Bitcoin.ECKey(btcKeyOrError));
				}
			});
		}
		else {
			if (Bitcoin.ECKey.isMiniFormat(key)) {
				// show Private Key Mini Format
				document.getElementById("detailprivmini").innerHTML = key;
				document.getElementById("detailmini").style.display = "block";
			}
			else if (Bitcoin.ECKey.isBase6Format(key)) {
				// show Private Key Base6 Format
				document.getElementById("detailprivb6").innerHTML = key;
				document.getElementById("detailb6").style.display = "block";
			}
			var btcKey = new Bitcoin.ECKey(key);
			if (btcKey.priv == null) {
				// enforce a minimum passphrase length
				if (key.length >= ninja.wallets.brainwallet.minPassphraseLength) {
					// Deterministic Wallet confirm box to ask if user wants to SHA256 the input to get a private key
					var usePassphrase = confirm(ninja.translator.get("detailconfirmsha256"));
					if (usePassphrase) {
						var bytes = Crypto.SHA256(key, { asBytes: true });
						var btcKey = new Bitcoin.ECKey(bytes);
					}
					else {
						ninja.wallets.detailwallet.clear();
					}
				}
				else {
					alert(ninja.translator.get("detailalertnotvalidprivatekey"));
					ninja.wallets.detailwallet.clear();
				}
			}
			ninja.wallets.detailwallet.populateKeyDetails(btcKey);
		}
	},

	populateKeyDetails: function (btcKey) {
		if (btcKey.priv != null) {
			btcKey.setCompressed(false);
			document.getElementById("detailprivhex").innerHTML = btcKey.toString().toUpperCase();
			document.getElementById("detailprivb64").innerHTML = btcKey.toString("base64");
			var bitcoinAddress = btcKey.getBitcoinAddress();
			var wif = btcKey.getBitcoinWalletImportFormat();
			document.getElementById("detailpubkey").innerHTML = btcKey.getPubKeyHex();
			document.getElementById("detailaddress").innerHTML = bitcoinAddress;
			document.getElementById("detailprivwif").innerHTML = wif;
			btcKey.setCompressed(true);
			var bitcoinAddressComp = btcKey.getBitcoinAddress();
			var wifComp = btcKey.getBitcoinWalletImportFormat();
			document.getElementById("detailpubkeycomp").innerHTML = btcKey.getPubKeyHex();
			document.getElementById("detailaddresscomp").innerHTML = bitcoinAddressComp;
			document.getElementById("detailprivwifcomp").innerHTML = wifComp;

			ninja.qrCode.showQrCode({
				"detailqrcodepublic": bitcoinAddress,
				"detailqrcodepubliccomp": bitcoinAddressComp,
				"detailqrcodeprivate": wif,
				"detailqrcodeprivatecomp": wifComp
			}, 4);
		}
	},

	clear: function () {
		document.getElementById("detailpubkey").innerHTML = "";
		document.getElementById("detailpubkeycomp").innerHTML = "";
		document.getElementById("detailaddress").innerHTML = "";
		document.getElementById("detailaddresscomp").innerHTML = "";
		document.getElementById("detailprivwif").innerHTML = "";
		document.getElementById("detailprivwifcomp").innerHTML = "";
		document.getElementById("detailprivhex").innerHTML = "";
		document.getElementById("detailprivb64").innerHTML = "";
		document.getElementById("detailprivb6").innerHTML = "";
		document.getElementById("detailprivmini").innerHTML = "";
		document.getElementById("detailprivbip38").innerHTML = "";
		document.getElementById("detailqrcodepublic").innerHTML = "";
		document.getElementById("detailqrcodepubliccomp").innerHTML = "";
		document.getElementById("detailqrcodeprivate").innerHTML = "";
		document.getElementById("detailqrcodeprivatecomp").innerHTML = "";
		document.getElementById("detailb6").style.display = "none";
		document.getElementById("detailmini").style.display = "none";
		document.getElementById("detailbip38commands").style.display = "none";
		document.getElementById("detailbip38").style.display = "none";
	}
};
	</script>
	<script type="text/javascript">
(function (ninja) {
	var ut = ninja.unitTests = {
		runSynchronousTests: function () {
			document.getElementById("busyblock").className = "busy";
			var div = document.createElement("div");
			div.setAttribute("class", "unittests");
			div.setAttribute("id", "unittests");
			var testResults = "";
			var passCount = 0;
			var testCount = 0;
			for (var test in ut.synchronousTests) {
				var exceptionMsg = "";
				var resultBool = false;
				try {
					resultBool = ut.synchronousTests[test]();
				} catch (ex) {
					exceptionMsg = ex.toString();
					resultBool = false;
				}
				if (resultBool == true) {
					var passFailStr = "pass";
					passCount++;
				}
				else {
					var passFailStr = "<b>FAIL " + exceptionMsg + "</b>";
				}
				testCount++;
				testResults += test + ": " + passFailStr + "<br/>";
			}
			testResults += passCount + " of " + testCount + " synchronous tests passed";
			if (passCount < testCount) {
				testResults += "<b>" + (testCount - passCount) + " unit test(s) failed</b>";
			}
			div.innerHTML = "<h3>Unit Tests</h3><div id=\"unittestresults\">" + testResults + "<br/><br/></div>";
			document.body.appendChild(div);
			document.getElementById("busyblock").className = "";

		},

		runAsynchronousTests: function () {
			var div = document.createElement("div");
			div.setAttribute("class", "unittests");
			div.setAttribute("id", "asyncunittests");
			div.innerHTML = "<h3>Async Unit Tests</h3><div id=\"asyncunittestresults\"></div><br/><br/><br/><br/>";
			document.body.appendChild(div);

			// run the asynchronous tests one after another so we don't crash the browser
			ninja.foreachSerialized(ninja.unitTests.asynchronousTests, function (name, cb) {
				document.getElementById("busyblock").className = "busy";
				ninja.unitTests.asynchronousTests[name](cb);
			}, function () {
				document.getElementById("asyncunittestresults").innerHTML += "running of asynchronous unit tests complete!<br/>";
				document.getElementById("busyblock").className = "";
			});
		},

		synchronousTests: {
			//ninja.publicKey tests
			testIsPublicKeyHexFormat: function () {
				var key = "0478982F40FA0C0B7A55717583AFC99A4EDFD301A2729DC59B0B8EB9E18692BCB521F054FAD982AF4CC1933AFD1F1B563EA779A6AA6CCE36A30B947DD653E63E44";
				var bool = ninja.publicKey.isPublicKeyHexFormat(key);
				if (bool != true) {
					return false;
				}
				return true;
			},
			testGetHexFromByteArray: function () {
				var bytes = [4, 120, 152, 47, 64, 250, 12, 11, 122, 85, 113, 117, 131, 175, 201, 154, 78, 223, 211, 1, 162, 114, 157, 197, 155, 11, 142, 185, 225, 134, 146, 188, 181, 33, 240, 84, 250, 217, 130, 175, 76, 193, 147, 58, 253, 31, 27, 86, 62, 167, 121, 166, 170, 108, 206, 54, 163, 11, 148, 125, 214, 83, 230, 62, 68];
				var key = ninja.publicKey.getHexFromByteArray(bytes);
				if (key != "0478982F40FA0C0B7A55717583AFC99A4EDFD301A2729DC59B0B8EB9E18692BCB521F054FAD982AF4CC1933AFD1F1B563EA779A6AA6CCE36A30B947DD653E63E44") {
					return false;
				}
				return true;
			},
			testHexToBytes: function () {
				var key = "0478982F40FA0C0B7A55717583AFC99A4EDFD301A2729DC59B0B8EB9E18692BCB521F054FAD982AF4CC1933AFD1F1B563EA779A6AA6CCE36A30B947DD653E63E44";
				var bytes = Crypto.util.hexToBytes(key);
				if (bytes.toString() != "4,120,152,47,64,250,12,11,122,85,113,117,131,175,201,154,78,223,211,1,162,114,157,197,155,11,142,185,225,134,146,188,181,33,240,84,250,217,130,175,76,193,147,58,253,31,27,86,62,167,121,166,170,108,206,54,163,11,148,125,214,83,230,62,68") {
					return false;
				}
				return true;
			},
			testGetBitcoinAddressFromByteArray: function () {
				var bytes = [4, 120, 152, 47, 64, 250, 12, 11, 122, 85, 113, 117, 131, 175, 201, 154, 78, 223, 211, 1, 162, 114, 157, 197, 155, 11, 142, 185, 225, 134, 146, 188, 181, 33, 240, 84, 250, 217, 130, 175, 76, 193, 147, 58, 253, 31, 27, 86, 62, 167, 121, 166, 170, 108, 206, 54, 163, 11, 148, 125, 214, 83, 230, 62, 68];
				var address = ninja.publicKey.getBitcoinAddressFromByteArray(bytes);
				if (address != "1Cnz9ULjzBPYhDw1J8bpczDWCEXnC9HuU1") {
					return false;
				}
				return true;
			},
			testGetByteArrayFromAdding: function () {
				var key1 = "0478982F40FA0C0B7A55717583AFC99A4EDFD301A2729DC59B0B8EB9E18692BCB521F054FAD982AF4CC1933AFD1F1B563EA779A6AA6CCE36A30B947DD653E63E44";
				var key2 = "0419153E53FECAD7FF07FEC26F7DDEB1EDD66957711AA4554B8475F10AFBBCD81C0159DC0099AD54F733812892EB9A11A8C816A201B3BAF0D97117EBA2033C9AB2";
				var bytes = ninja.publicKey.getByteArrayFromAdding(key1, key2);
				if (bytes.toString() != "4,151,19,227,152,54,37,184,255,4,83,115,216,102,189,76,82,170,57,4,196,253,2,41,74,6,226,33,167,199,250,74,235,223,128,233,99,150,147,92,57,39,208,84,196,71,68,248,166,106,138,95,172,253,224,70,187,65,62,92,81,38,253,79,0") {
					return false;
				}
				return true;
			},
			testGetByteArrayFromAddingCompressed: function () {
				var key1 = "0278982F40FA0C0B7A55717583AFC99A4EDFD301A2729DC59B0B8EB9E18692BCB5";
				var key2 = "0219153E53FECAD7FF07FEC26F7DDEB1EDD66957711AA4554B8475F10AFBBCD81C";
				var bytes = ninja.publicKey.getByteArrayFromAdding(key1, key2);
				var hex = ninja.publicKey.getHexFromByteArray(bytes);
				if (hex != "029713E3983625B8FF045373D866BD4C52AA3904C4FD02294A06E221A7C7FA4AEB") {
					return false;
				}
				return true;
			},
			testGetByteArrayFromAddingUncompressedAndCompressed: function () {
				var key1 = "0478982F40FA0C0B7A55717583AFC99A4EDFD301A2729DC59B0B8EB9E18692BCB521F054FAD982AF4CC1933AFD1F1B563EA779A6AA6CCE36A30B947DD653E63E44";
				var key2 = "0219153E53FECAD7FF07FEC26F7DDEB1EDD66957711AA4554B8475F10AFBBCD81C";
				var bytes = ninja.publicKey.getByteArrayFromAdding(key1, key2);
				if (bytes.toString() != "4,151,19,227,152,54,37,184,255,4,83,115,216,102,189,76,82,170,57,4,196,253,2,41,74,6,226,33,167,199,250,74,235,223,128,233,99,150,147,92,57,39,208,84,196,71,68,248,166,106,138,95,172,253,224,70,187,65,62,92,81,38,253,79,0") {
					return false;
				}
				return true;
			},
			testGetByteArrayFromAddingShouldReturnNullWhenSameKey1: function () {
				var key1 = "0478982F40FA0C0B7A55717583AFC99A4EDFD301A2729DC59B0B8EB9E18692BCB521F054FAD982AF4CC1933AFD1F1B563EA779A6AA6CCE36A30B947DD653E63E44";
				var key2 = "0478982F40FA0C0B7A55717583AFC99A4EDFD301A2729DC59B0B8EB9E18692BCB521F054FAD982AF4CC1933AFD1F1B563EA779A6AA6CCE36A30B947DD653E63E44";
				var bytes = ninja.publicKey.getByteArrayFromAdding(key1, key2);
				if (bytes != null) {
					return false;
				}
				return true;
			},
			testGetByteArrayFromAddingShouldReturnNullWhenSameKey2: function () {
				var key1 = "0478982F40FA0C0B7A55717583AFC99A4EDFD301A2729DC59B0B8EB9E18692BCB521F054FAD982AF4CC1933AFD1F1B563EA779A6AA6CCE36A30B947DD653E63E44";
				var key2 = "0278982F40FA0C0B7A55717583AFC99A4EDFD301A2729DC59B0B8EB9E18692BCB5";
				var bytes = ninja.publicKey.getByteArrayFromAdding(key1, key2);
				if (bytes != null) {
					return false;
				}
				return true;
			},
			testGetByteArrayFromMultiplying: function () {
				var key1 = "0478982F40FA0C0B7A55717583AFC99A4EDFD301A2729DC59B0B8EB9E18692BCB521F054FAD982AF4CC1933AFD1F1B563EA779A6AA6CCE36A30B947DD653E63E44";
				var key2 = "SQE6yipP5oW8RBaStWoB47xsRQ8pat";
				var bytes = ninja.publicKey.getByteArrayFromMultiplying(key1, new Bitcoin.ECKey(key2));
				if (bytes.toString() != "4,102,230,163,180,107,9,21,17,48,35,245,227,110,199,119,144,57,41,112,64,245,182,40,224,41,230,41,5,26,206,138,57,115,35,54,105,7,180,5,106,217,57,229,127,174,145,215,79,121,163,191,211,143,215,50,48,156,211,178,72,226,68,150,52") {
					return false;
				}
				return true;
			},
			testGetByteArrayFromMultiplyingCompressedOutputsUncompressed: function () {
				var key1 = "0278982F40FA0C0B7A55717583AFC99A4EDFD301A2729DC59B0B8EB9E18692BCB5";
				var key2 = "SQE6yipP5oW8RBaStWoB47xsRQ8pat";
				var bytes = ninja.publicKey.getByteArrayFromMultiplying(key1, new Bitcoin.ECKey(key2));
				if (bytes.toString() != "4,102,230,163,180,107,9,21,17,48,35,245,227,110,199,119,144,57,41,112,64,245,182,40,224,41,230,41,5,26,206,138,57,115,35,54,105,7,180,5,106,217,57,229,127,174,145,215,79,121,163,191,211,143,215,50,48,156,211,178,72,226,68,150,52") {
					return false;
				}
				return true;
			},
			testGetByteArrayFromMultiplyingCompressedOutputsCompressed: function () {
				var key1 = "0278982F40FA0C0B7A55717583AFC99A4EDFD301A2729DC59B0B8EB9E18692BCB5";
				var key2 = "L1n4cgNZAo2KwdUc15zzstvo1dcxpBw26NkrLqfDZtU9AEbPkLWu";
				var ecKey = new Bitcoin.ECKey(key2);
				var bytes = ninja.publicKey.getByteArrayFromMultiplying(key1, ecKey);
				if (bytes.toString() != "2,102,230,163,180,107,9,21,17,48,35,245,227,110,199,119,144,57,41,112,64,245,182,40,224,41,230,41,5,26,206,138,57") {
					return false;
				}
				return true;
			},
			testGetByteArrayFromMultiplyingShouldReturnNullWhenSameKey1: function () {
				var key1 = "0478982F40FA0C0B7A55717583AFC99A4EDFD301A2729DC59B0B8EB9E18692BCB521F054FAD982AF4CC1933AFD1F1B563EA779A6AA6CCE36A30B947DD653E63E44";
				var key2 = "5J8QhiQtAiozKwyk3GCycAscg1tNaYhNdiiLey8vaDK8Bzm4znb";
				var bytes = ninja.publicKey.getByteArrayFromMultiplying(key1, new Bitcoin.ECKey(key2));
				if (bytes != null) {
					return false;
				}
				return true;
			},
			testGetByteArrayFromMultiplyingShouldReturnNullWhenSameKey2: function () {
				var key1 = "0278982F40FA0C0B7A55717583AFC99A4EDFD301A2729DC59B0B8EB9E18692BCB5";
				var key2 = "KxbhchnQquYQ2dfSxz7rrEaQTCukF4uCV57TkamyTbLzjFWcdi3S";
				var bytes = ninja.publicKey.getByteArrayFromMultiplying(key1, new Bitcoin.ECKey(key2));
				if (bytes != null) {
					return false;
				}
				return true;
			},
			// confirms multiplication is working and BigInteger was created correctly (Pub Key B vs Priv Key A)
			testGetPubHexFromMultiplyingPrivAPubB: function () {
				var keyPub = "04F04BF260DCCC46061B5868F60FE962C77B5379698658C98A93C3129F5F98938020F36EBBDE6F1BEAF98E5BD0E425747E68B0F2FB7A2A59EDE93F43C0D78156FF";
				var keyPriv = "B1202A137E917536B3B4C5010C3FF5DDD4784917B3EEF21D3A3BF21B2E03310C";
				var bytes = ninja.publicKey.getByteArrayFromMultiplying(keyPub, new Bitcoin.ECKey(keyPriv));
				var pubHex = ninja.publicKey.getHexFromByteArray(bytes);
				if (pubHex != "04C6732006AF4AE571C7758DF7A7FB9E3689DFCF8B53D8724D3A15517D8AB1B4DBBE0CB8BB1C4525F8A3001771FC7E801D3C5986A555E2E9441F1AD6D181356076") {
					return false;
				}
				return true;
			},
			// confirms multiplication is working and BigInteger was created correctly (Pub Key A vs Priv Key B)
			testGetPubHexFromMultiplyingPrivBPubA: function () {
				var keyPub = "0429BF26C0AF7D31D608474CEBD49DA6E7C541B8FAD95404B897643476CE621CFD05E24F7AE8DE8033AADE5857DB837E0B704A31FDDFE574F6ECA879643A0D3709";
				var keyPriv = "7DE52819F1553C2BFEDE6A2628B6FDDF03C2A07EB21CF77ACA6C2C3D252E1FD9";
				var bytes = ninja.publicKey.getByteArrayFromMultiplying(keyPub, new Bitcoin.ECKey(keyPriv));
				var pubHex = ninja.publicKey.getHexFromByteArray(bytes);
				if (pubHex != "04C6732006AF4AE571C7758DF7A7FB9E3689DFCF8B53D8724D3A15517D8AB1B4DBBE0CB8BB1C4525F8A3001771FC7E801D3C5986A555E2E9441F1AD6D181356076") {
					return false;
				}
				return true;
			},

			// Private Key tests
			testBadKeyIsNotWif: function () {
				return !(Bitcoin.ECKey.isWalletImportFormat("bad key"));
			},
			testBadKeyIsNotWifCompressed: function () {
				return !(Bitcoin.ECKey.isCompressedWalletImportFormat("bad key"));
			},
			testBadKeyIsNotHex: function () {
				return !(Bitcoin.ECKey.isHexFormat("bad key"));
			},
			testBadKeyIsNotBase64: function () {
				return !(Bitcoin.ECKey.isBase64Format("bad key"));
			},
			testBadKeyIsNotMini: function () {
				return !(Bitcoin.ECKey.isMiniFormat("bad key"));
			},
			testBadKeyReturnsNullPrivFromECKey: function () {
				var key = "bad key";
				var ecKey = new Bitcoin.ECKey(key);
				if (ecKey.priv != null) {
					return false;
				}
				return true;
			},
			testGetBitcoinPrivateKeyByteArray: function () {
				var key = "5J8QhiQtAiozKwyk3GCycAscg1tNaYhNdiiLey8vaDK8Bzm4znb";
				var bytes = [41, 38, 101, 195, 135, 36, 24, 173, 241, 218, 127, 250, 58, 100, 111, 47, 6, 2, 36, 109, 166, 9, 138, 145, 210, 41, 195, 33, 80, 242, 113, 139];
				var btcKey = new Bitcoin.ECKey(key);
				if (btcKey.getBitcoinPrivateKeyByteArray().toString() != bytes.toString()) {
					return false;
				}
				return true;
			},
			testECKeyDecodeWalletImportFormat: function () {
				var key = "5J8QhiQtAiozKwyk3GCycAscg1tNaYhNdiiLey8vaDK8Bzm4znb";
				var bytes1 = [41, 38, 101, 195, 135, 36, 24, 173, 241, 218, 127, 250, 58, 100, 111, 47, 6, 2, 36, 109, 166, 9, 138, 145, 210, 41, 195, 33, 80, 242, 113, 139];
				var bytes2 = Bitcoin.ECKey.decodeWalletImportFormat(key);
				if (bytes1.toString() != bytes2.toString()) {
					return false;
				}
				return true;
			},
			testECKeyDecodeCompressedWalletImportFormat: function () {
				var key = "KxbhchnQquYQ2dfSxz7rrEaQTCukF4uCV57TkamyTbLzjFWcdi3S";
				var bytes1 = [41, 38, 101, 195, 135, 36, 24, 173, 241, 218, 127, 250, 58, 100, 111, 47, 6, 2, 36, 109, 166, 9, 138, 145, 210, 41, 195, 33, 80, 242, 113, 139];
				var bytes2 = Bitcoin.ECKey.decodeCompressedWalletImportFormat(key);
				if (bytes1.toString() != bytes2.toString()) {
					return false;
				}
				return true;
			},
			testWifToPubKeyHex: function () {
				var key = "5J8QhiQtAiozKwyk3GCycAscg1tNaYhNdiiLey8vaDK8Bzm4znb";
				var btcKey = new Bitcoin.ECKey(key);
				if (btcKey.getPubKeyHex() != "0478982F40FA0C0B7A55717583AFC99A4EDFD301A2729DC59B0B8EB9E18692BCB521F054FAD982AF4CC1933AFD1F1B563EA779A6AA6CCE36A30B947DD653E63E44"
						|| btcKey.getPubPoint().compressed != false) {
					return false;
				}
				return true;
			},
			testWifToPubKeyHexCompressed: function () {
				var key = "5J8QhiQtAiozKwyk3GCycAscg1tNaYhNdiiLey8vaDK8Bzm4znb";
				var btcKey = new Bitcoin.ECKey(key);
				btcKey.setCompressed(true);
				if (btcKey.getPubKeyHex() != "0278982F40FA0C0B7A55717583AFC99A4EDFD301A2729DC59B0B8EB9E18692BCB5"
						|| btcKey.getPubPoint().compressed != true) {
					return false;
				}
				return true;
			},
			testBase64ToECKey: function () {
				var key = "KSZlw4ckGK3x2n/6OmRvLwYCJG2mCYqR0inDIVDycYs=";
				var btcKey = new Bitcoin.ECKey(key);
				if (btcKey.getBitcoinBase64Format() != "KSZlw4ckGK3x2n/6OmRvLwYCJG2mCYqR0inDIVDycYs=") {
					return false;
				}
				return true;
			},
			testHexToECKey: function () {
				var key = "292665C3872418ADF1DA7FFA3A646F2F0602246DA6098A91D229C32150F2718B";
				var btcKey = new Bitcoin.ECKey(key);
				if (btcKey.getBitcoinHexFormat() != "292665C3872418ADF1DA7FFA3A646F2F0602246DA6098A91D229C32150F2718B") {
					return false;
				}
				return true;
			},
			testCompressedWifToECKey: function () {
				var key = "KxbhchnQquYQ2dfSxz7rrEaQTCukF4uCV57TkamyTbLzjFWcdi3S";
				var btcKey = new Bitcoin.ECKey(key);
				if (btcKey.getBitcoinWalletImportFormat() != "KxbhchnQquYQ2dfSxz7rrEaQTCukF4uCV57TkamyTbLzjFWcdi3S"
						|| btcKey.getPubPoint().compressed != true) {
					return false;
				}
				return true;
			},
			testWifToECKey: function () {
				var key = "5J8QhiQtAiozKwyk3GCycAscg1tNaYhNdiiLey8vaDK8Bzm4znb";
				var btcKey = new Bitcoin.ECKey(key);
				if (btcKey.getBitcoinWalletImportFormat() != "5J8QhiQtAiozKwyk3GCycAscg1tNaYhNdiiLey8vaDK8Bzm4znb") {
					return false;
				}
				return true;
			},
			testBrainToECKey: function () {
				var key = "Cryptowallets.org unit test";
				var bytes = Crypto.SHA256(key, { asBytes: true });
				var btcKey = new Bitcoin.ECKey(bytes);
				if (btcKey.getBitcoinWalletImportFormat() != "5J8QhiQtAiozKwyk3GCycAscg1tNaYhNdiiLey8vaDK8Bzm4znb") {
					return false;
				}
				return true;
			},
			testMini30CharsToECKey: function () {
				var key = "SQE6yipP5oW8RBaStWoB47xsRQ8pat";
				var btcKey = new Bitcoin.ECKey(key);
				if (btcKey.getBitcoinWalletImportFormat() != "5JrBLQseeZdYw4jWEAHmNxGMr5fxh9NJU3fUwnv4khfKcg2rJVh") {
					return false;
				}
				return true;
			},
			testGetECKeyFromAdding: function () {
				var key1 = "5J8QhiQtAiozKwyk3GCycAscg1tNaYhNdiiLey8vaDK8Bzm4znb";
				var key2 = "SQE6yipP5oW8RBaStWoB47xsRQ8pat";
				var ecKey = ninja.privateKey.getECKeyFromAdding(key1, key2);
				if (ecKey.getBitcoinWalletImportFormat() != "5KAJTSqSjpsZ11KyEE3qu5PrJVjR4ZCbNxK3Nb1F637oe41m1c2") {
					return false;
				}
				return true;
			},
			testGetECKeyFromAddingCompressed: function () {
				var key1 = "KxbhchnQquYQ2dfSxz7rrEaQTCukF4uCV57TkamyTbLzjFWcdi3S";
				var key2 = "L1n4cgNZAo2KwdUc15zzstvo1dcxpBw26NkrLqfDZtU9AEbPkLWu";
				var ecKey = ninja.privateKey.getECKeyFromAdding(key1, key2);
				if (ecKey.getBitcoinWalletImportFormat() != "L3A43j2pc2J8F2SjBNbYprPrcDpDCh8Aju8dUH65BEM2r7RFSLv4") {
					return false;
				}
				return true;
			},
			testGetECKeyFromAddingUncompressedAndCompressed: function () {
				var key1 = "5J8QhiQtAiozKwyk3GCycAscg1tNaYhNdiiLey8vaDK8Bzm4znb";
				var key2 = "L1n4cgNZAo2KwdUc15zzstvo1dcxpBw26NkrLqfDZtU9AEbPkLWu";
				var ecKey = ninja.privateKey.getECKeyFromAdding(key1, key2);
				if (ecKey.getBitcoinWalletImportFormat() != "5KAJTSqSjpsZ11KyEE3qu5PrJVjR4ZCbNxK3Nb1F637oe41m1c2") {
					return false;
				}
				return true;
			},
			testGetECKeyFromAddingShouldReturnNullWhenSameKey1: function () {
				var key1 = "5J8QhiQtAiozKwyk3GCycAscg1tNaYhNdiiLey8vaDK8Bzm4znb";
				var key2 = "5J8QhiQtAiozKwyk3GCycAscg1tNaYhNdiiLey8vaDK8Bzm4znb";
				var ecKey = ninja.privateKey.getECKeyFromAdding(key1, key2);
				if (ecKey != null) {
					return false;
				}
				return true;
			},
			testGetECKeyFromAddingShouldReturnNullWhenSameKey2: function () {
				var key1 = "5J8QhiQtAiozKwyk3GCycAscg1tNaYhNdiiLey8vaDK8Bzm4znb";
				var key2 = "KxbhchnQquYQ2dfSxz7rrEaQTCukF4uCV57TkamyTbLzjFWcdi3S";
				var ecKey = ninja.privateKey.getECKeyFromAdding(key1, key2);
				if (ecKey != null) {
					return false;
				}
				return true;
			},
			testGetECKeyFromMultiplying: function () {
				var key1 = "5J8QhiQtAiozKwyk3GCycAscg1tNaYhNdiiLey8vaDK8Bzm4znb";
				var key2 = "SQE6yipP5oW8RBaStWoB47xsRQ8pat";
				var ecKey = ninja.privateKey.getECKeyFromMultiplying(key1, key2);
				if (ecKey.getBitcoinWalletImportFormat() != "5KetpZ5mCGagCeJnMmvo18n4iVrtPSqrpnW5RP92Gv2BQy7GPCk") {
					return false;
				}
				return true;
			},
			testGetECKeyFromMultiplyingCompressed: function () {
				var key1 = "KxbhchnQquYQ2dfSxz7rrEaQTCukF4uCV57TkamyTbLzjFWcdi3S";
				var key2 = "L1n4cgNZAo2KwdUc15zzstvo1dcxpBw26NkrLqfDZtU9AEbPkLWu";
				var ecKey = ninja.privateKey.getECKeyFromMultiplying(key1, key2);
				if (ecKey.getBitcoinWalletImportFormat() != "L5LFitc24jme2PfVChJS3bKuQAPBp54euuqLWciQdF2CxnaU3M8t") {
					return false;
				}
				return true;
			},
			testGetECKeyFromMultiplyingUncompressedAndCompressed: function () {
				var key1 = "5J8QhiQtAiozKwyk3GCycAscg1tNaYhNdiiLey8vaDK8Bzm4znb";
				var key2 = "L1n4cgNZAo2KwdUc15zzstvo1dcxpBw26NkrLqfDZtU9AEbPkLWu";
				var ecKey = ninja.privateKey.getECKeyFromMultiplying(key1, key2);
				if (ecKey.getBitcoinWalletImportFormat() != "5KetpZ5mCGagCeJnMmvo18n4iVrtPSqrpnW5RP92Gv2BQy7GPCk") {
					return false;
				}
				return true;
			},
			testGetECKeyFromMultiplyingShouldReturnNullWhenSameKey1: function () {
				var key1 = "5J8QhiQtAiozKwyk3GCycAscg1tNaYhNdiiLey8vaDK8Bzm4znb";
				var key2 = "5J8QhiQtAiozKwyk3GCycAscg1tNaYhNdiiLey8vaDK8Bzm4znb";
				var ecKey = ninja.privateKey.getECKeyFromMultiplying(key1, key2);
				if (ecKey != null) {
					return false;
				}
				return true;
			},
			testGetECKeyFromMultiplyingShouldReturnNullWhenSameKey2: function () {
				var key1 = "5J8QhiQtAiozKwyk3GCycAscg1tNaYhNdiiLey8vaDK8Bzm4znb";
				var key2 = "KxbhchnQquYQ2dfSxz7rrEaQTCukF4uCV57TkamyTbLzjFWcdi3S";
				var ecKey = ninja.privateKey.getECKeyFromMultiplying(key1, key2);
				if (ecKey != null) {
					return false;
				}
				return true;
			},
			testGetECKeyFromBase6Key: function () {
				var baseKey = "100531114202410255230521444145414341221420541210522412225005202300434134213212540304311321323051431";
				var hexKey = "292665C3872418ADF1DA7FFA3A646F2F0602246DA6098A91D229C32150F2718B";
				var ecKey = new Bitcoin.ECKey(baseKey);
				if (ecKey.getBitcoinHexFormat() != hexKey) {
					return false;
				}
				return true;
			},

			// EllipticCurve tests
			testDecodePointEqualsDecodeFrom: function () {
				var key = "04F04BF260DCCC46061B5868F60FE962C77B5379698658C98A93C3129F5F98938020F36EBBDE6F1BEAF98E5BD0E425747E68B0F2FB7A2A59EDE93F43C0D78156FF";
				var ecparams = EllipticCurve.getSECCurveByName("secp256k1");
				var ecPoint1 = EllipticCurve.PointFp.decodeFrom(ecparams.getCurve(), Crypto.util.hexToBytes(key));
				var ecPoint2 = ecparams.getCurve().decodePointHex(key);
				if (!ecPoint1.equals(ecPoint2)) {
					return false;
				}
				return true;
			},
			testDecodePointHexForCompressedPublicKey: function () {
				var key = "03F04BF260DCCC46061B5868F60FE962C77B5379698658C98A93C3129F5F989380";
				var pubHexUncompressed = ninja.publicKey.getDecompressedPubKeyHex(key);
				if (pubHexUncompressed != "04F04BF260DCCC46061B5868F60FE962C77B5379698658C98A93C3129F5F98938020F36EBBDE6F1BEAF98E5BD0E425747E68B0F2FB7A2A59EDE93F43C0D78156FF") {
					return false;
				}
				return true;
			},
			// old bugs
			testBugWithLeadingZeroBytePublicKey: function () {
				var key = "5Je7CkWTzgdo1RpwjYhwnVKxQXt8EPRq17WZFtWcq5umQdsDtTP";
				var btcKey = new Bitcoin.ECKey(key);
				if (btcKey.getBitcoinAddress() != "1M6dsMZUjFxjdwsyVk8nJytWcfr9tfUa9E") {
					return false;
				}
				return true;
			},
			testBugWithLeadingZeroBytePrivateKey: function () {
				var key = "0004d30da67214fa65a41a6493576944c7ea86713b14db437446c7a8df8e13da";
				var btcKey = new Bitcoin.ECKey(key);
				if (btcKey.getBitcoinAddress() != "1NAjZjF81YGfiJ3rTKc7jf1nmZ26KN7Gkn") {
					return false;
				}
				return true;
			}
		},

		asynchronousTests: {
			//https://en.bitcoin.it/wiki/BIP_0038
			testBip38: function (done) {
				var tests = [
				//No compression, no EC multiply
					["6PRVWUbkzzsbcVac2qwfssoUJAN1Xhrg6bNk8J7Nzm5H7kxEbn2Nh2ZoGg", "TestingOneTwoThree", "5KN7MzqK5wt2TP1fQCYyHBtDrXdJuXbUzm4A9rKAteGu3Qi5CVR"],
					["6PRNFFkZc2NZ6dJqFfhRoFNMR9Lnyj7dYGrzdgXXVMXcxoKTePPX1dWByq", "Satoshi", "5HtasZ6ofTHP6HCwTqTkLDuLQisYPah7aUnSKfC7h4hMUVw2gi5"],
				//Compression, no EC multiply
					["6PYNKZ1EAgYgmQfmNVamxyXVWHzK5s6DGhwP4J5o44cvXdoY7sRzhtpUeo", "TestingOneTwoThree", "L44B5gGEpqEDRS9vVPz7QT35jcBG2r3CZwSwQ4fCewXAhAhqGVpP"],
					["6PYLtMnXvfG3oJde97zRyLYFZCYizPU5T3LwgdYJz1fRhh16bU7u6PPmY7", "Satoshi", "KwYgW8gcxj1JWJXhPSu4Fqwzfhp5Yfi42mdYmMa4XqK7NJxXUSK7"],
				//EC multiply, no compression, no lot/sequence numbers
					["6PfQu77ygVyJLZjfvMLyhLMQbYnu5uguoJJ4kMCLqWwPEdfpwANVS76gTX", "TestingOneTwoThree", "5K4caxezwjGCGfnoPTZ8tMcJBLB7Jvyjv4xxeacadhq8nLisLR2"],
					["6PfLGnQs6VZnrNpmVKfjotbnQuaJK4KZoPFrAjx1JMJUa1Ft8gnf5WxfKd", "Satoshi", "5KJ51SgxWaAYR13zd9ReMhJpwrcX47xTJh2D3fGPG9CM8vkv5sH"],
				//EC multiply, no compression, lot/sequence numbers
					["6PgNBNNzDkKdhkT6uJntUXwwzQV8Rr2tZcbkDcuC9DZRsS6AtHts4Ypo1j", "MOLON LABE", "5JLdxTtcTHcfYcmJsNVy1v2PMDx432JPoYcBTVVRHpPaxUrdtf8"],
					["6PgGWtx25kUg8QWvwuJAgorN6k9FbE25rv5dMRwu5SKMnfpfVe5mar2ngH", Crypto.charenc.UTF8.bytesToString([206, 156, 206, 159, 206, 155, 206, 169, 206, 157, 32, 206, 155, 206, 145, 206, 146, 206, 149])/*UTF-8 characters, encoded in source so they don't get corrupted*/, "5KMKKuUmAkiNbA3DazMQiLfDq47qs8MAEThm4yL8R2PhV1ov33D"]];

				// running each test uses a lot of memory, which isn't freed
				// immediately, so give the VM a little time to reclaim memory
				function waitThenCall(callback) {
					return function () { setTimeout(callback, 10000); }
				}

				var decryptTest = function (test, i, onComplete) {
					ninja.privateKey.BIP38EncryptedKeyToByteArrayAsync(test[0], test[1], function (privBytes) {
						if (privBytes.constructor == Error) {
							document.getElementById("asyncunittestresults").innerHTML += "fail testDecryptBip38 #" + i + ", error: " + privBytes.message + "<br/>";
						} else {
							var btcKey = new Bitcoin.ECKey(privBytes);
							var wif = !test[2].substr(0, 1).match(/[LK]/) ? btcKey.setCompressed(false).getBitcoinWalletImportFormat() : btcKey.setCompressed(true).getBitcoinWalletImportFormat();
							if (wif != test[2]) {
								document.getElementById("asyncunittestresults").innerHTML += "fail testDecryptBip38 #" + i + "<br/>";
							} else {
								document.getElementById("asyncunittestresults").innerHTML += "pass testDecryptBip38 #" + i + "<br/>";
							}
						}
						onComplete();
					});
				};

				var encryptTest = function (test, compressed, i, onComplete) {
					ninja.privateKey.BIP38PrivateKeyToEncryptedKeyAsync(test[2], test[1], compressed, function (encryptedKey) {
						if (encryptedKey === test[0]) {
							document.getElementById("asyncunittestresults").innerHTML += "pass testBip38Encrypt #" + i + "<br/>";
						} else {
							document.getElementById("asyncunittestresults").innerHTML += "fail testBip38Encrypt #" + i + "<br/>";
							document.getElementById("asyncunittestresults").innerHTML += "expected " + test[0] + "<br/>received " + encryptedKey + "<br/>";
						}
						onComplete();
					});
				};

				// test randomly generated encryption-decryption cycle
				var cycleTest = function (i, compress, onComplete) {
					// create new private key
					var privKey = (new Bitcoin.ECKey(false)).getBitcoinWalletImportFormat();

					// encrypt private key
					ninja.privateKey.BIP38PrivateKeyToEncryptedKeyAsync(privKey, 'testing', compress, function (encryptedKey) {
						// decrypt encryptedKey
						ninja.privateKey.BIP38EncryptedKeyToByteArrayAsync(encryptedKey, 'testing', function (decryptedBytes) {
							var decryptedKey = (new Bitcoin.ECKey(decryptedBytes)).getBitcoinWalletImportFormat();

							if (decryptedKey === privKey) {
								document.getElementById("asyncunittestresults").innerHTML += "pass cycleBip38 test #" + i + "<br/>";
							}
							else {
								document.getElementById("asyncunittestresults").innerHTML += "fail cycleBip38 test #" + i + " " + privKey + "<br/>";
								document.getElementById("asyncunittestresults").innerHTML += "encrypted key: " + encryptedKey + "<br/>decrypted key: " + decryptedKey;
							}
							onComplete();
						});
					});
				};

				// intermediate test - create some encrypted keys from an intermediate
				// then decrypt them to check that the private keys are recoverable
				var intermediateTest = function (i, onComplete) {
					var pass = Math.random().toString(36).substr(2);
					ninja.privateKey.BIP38GenerateIntermediatePointAsync(pass, null, null, function (intermediatePoint) {
						ninja.privateKey.BIP38GenerateECAddressAsync(intermediatePoint, false, function (address, encryptedKey) {
							ninja.privateKey.BIP38EncryptedKeyToByteArrayAsync(encryptedKey, pass, function (privBytes) {
								if (privBytes.constructor == Error) {
									document.getElementById("asyncunittestresults").innerHTML += "fail testBip38Intermediate #" + i + ", error: " + privBytes.message + "<br/>";
								} else {
									var btcKey = new Bitcoin.ECKey(privBytes);
									var btcAddress = btcKey.getBitcoinAddress();
									if (address !== btcKey.getBitcoinAddress()) {
										document.getElementById("asyncunittestresults").innerHTML += "fail testBip38Intermediate #" + i + "<br/>";
									} else {
										document.getElementById("asyncunittestresults").innerHTML += "pass testBip38Intermediate #" + i + "<br/>";
									}
								}
								onComplete();
							});
						});
					});
				}

				document.getElementById("asyncunittestresults").innerHTML += "running " + tests.length + " tests named testDecryptBip38<br/>";
				document.getElementById("asyncunittestresults").innerHTML += "running 4 tests named testBip38Encrypt<br/>";
				document.getElementById("asyncunittestresults").innerHTML += "running 2 tests named cycleBip38<br/>";
				document.getElementById("asyncunittestresults").innerHTML += "running 5 tests named testBip38Intermediate<br/>";
				ninja.runSerialized([
					function (cb) {
						ninja.forSerialized(0, tests.length, function (i, callback) {
							decryptTest(tests[i], i, waitThenCall(callback));
						}, waitThenCall(cb));
					},
					function (cb) {
						ninja.forSerialized(0, 4, function (i, callback) {
							// only first 4 test vectors are not EC-multiply,
							// compression param false for i = 1,2 and true for i = 3,4
							encryptTest(tests[i], i >= 2, i, waitThenCall(callback));
						}, waitThenCall(cb));
					},
					function (cb) {
						ninja.forSerialized(0, 2, function (i, callback) {
							cycleTest(i, i % 2 ? true : false, waitThenCall(callback));
						}, waitThenCall(cb));
					},
					function (cb) {
						ninja.forSerialized(0, 5, function (i, callback) {
							intermediateTest(i, waitThenCall(callback));
						}, cb);
					}
				], done);
			}
		}
	};
})(ninja);
	</script>
	<script type="text/javascript">
// run unit tests
if (ninja.getQueryString()["unittests"] == "true" || ninja.getQueryString()["unittests"] == "1") {
	ninja.unitTests.runSynchronousTests();
	ninja.translator.showEnglishJson();
}
// run async unit tests
if (ninja.getQueryString()["asyncunittests"] == "true" || ninja.getQueryString()["asyncunittests"] == "1") {
	ninja.unitTests.runAsynchronousTests();
}
// change language
if (ninja.getQueryString()["culture"] != undefined) {
	ninja.translator.translate(ninja.getQueryString()["culture"]);
}
// testnet, check if testnet edition should be activated
if (ninja.getQueryString()["testnet"] == "true" || ninja.getQueryString()["testnet"] == "1") {
	document.getElementById("testnet").innerHTML = ninja.translator.get("testneteditionactivated");
	document.getElementById("testnet").style.display = "block";
	document.getElementById("detailwifprefix").innerHTML = "'9'";
	document.getElementById("detailcompwifprefix").innerHTML = "'c'";
	Bitcoin.Address.networkVersion = 0x6F; // testnet
	Bitcoin.ECKey.privateKeyPrefix = 0xEF; // testnet
	ninja.testnetMode = true;
}
if (ninja.getQueryString()["showseedpool"] == "true" || ninja.getQueryString()["showseedpool"] == "1") {
	document.getElementById("seedpoolarea").style.display = "block";
}
	</script>
</body>
</html>
