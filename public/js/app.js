/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

// Function to select nav elements
window.onload = function () {
  var selectNavElement = function selectNavElement(element) {
    return document.querySelector(element);
  };

  selectNavElement('.navbar__hamburger').addEventListener('click', function () {
    selectNavElement('.navbar__hamburger').classList.toggle('active');
    selectNavElement('.navbar__list').classList.toggle('active');
  });
};

/***/ }),

/***/ "./resources/sass/admin.scss":
/*!***********************************!*\
  !*** ./resources/sass/admin.scss ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/css-loader/index.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\n\n            height: 150px;\n                        ^\n      Expected \"{\".\n    ╷\n160 │             height: 150px;\n    │                          ^\n    ╵\n  stdin 160:26  root stylesheet\n      in /Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/resources/sass/app.scss (line 160, column 26)\n    at /Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/webpack/lib/NormalModule.js:316:20\n    at /Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/loader-runner/lib/LoaderRunner.js:367:11\n    at /Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/loader-runner/lib/LoaderRunner.js:233:18\n    at context.callback (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/loader-runner/lib/LoaderRunner.js:111:13)\n    at /Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass-loader/dist/index.js:89:7\n    at Function.call$2 (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:54416:16)\n    at _render_closure1.call$2 (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:33511:12)\n    at _RootZone.runBinary$3$3 (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:19804:18)\n    at _RootZone.runBinary$3 (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:19808:19)\n    at _FutureListener.handleError$1 (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:18273:19)\n    at _Future__propagateToListeners_handleError.call$0 (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:18561:40)\n    at Object._Future__propagateToListeners (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:3486:88)\n    at _Future._completeError$2 (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:18397:9)\n    at _AsyncAwaitCompleter.completeError$2 (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:17796:12)\n    at Object._asyncRethrow (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:3242:17)\n    at /Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:10539:20\n    at _wrapJsFunctionForAsync_closure.$protected (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:3265:15)\n    at _wrapJsFunctionForAsync_closure.call$2 (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:17817:12)\n    at _awaitOnObject_closure0.call$2 (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:17809:25)\n    at _RootZone.runBinary$3$3 (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:19804:18)\n    at _RootZone.runBinary$3 (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:19808:19)\n    at _FutureListener.handleError$1 (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:18273:19)\n    at _Future__propagateToListeners_handleError.call$0 (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:18561:40)\n    at Object._Future__propagateToListeners (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:3486:88)\n    at _Future._completeError$2 (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:18397:9)\n    at _Future__asyncCompleteError_closure.call$0 (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:18487:18)\n    at Object._microtaskLoop (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:3536:21)\n    at StaticClosure._startMicrotaskLoop (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:3542:11)\n    at _AsyncRun__scheduleImmediateJsOverride_internalCallback.call$0 (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:17718:21)\n    at invokeClosure (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:1358:26)\n    at Immediate.<anonymous> (/Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/node_modules/sass/sass.dart.js:1379:18)\n    at processImmediate (internal/timers.js:439:21)");

/***/ }),

/***/ 0:
/*!*****************************************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ./resources/sass/admin.scss ***!
  \*****************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/resources/js/app.js */"./resources/js/app.js");
__webpack_require__(/*! /Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/resources/sass/app.scss */"./resources/sass/app.scss");
module.exports = __webpack_require__(/*! /Users/raigriffioen/Desktop/backup/School/Eigen projecten/NederlandeZaken/resources/sass/admin.scss */"./resources/sass/admin.scss");


/***/ })

/******/ });