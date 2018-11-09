import Vue from 'vue';
import _ from 'lodash';

const files = require.context('./', true, /\.vue$/i);

files.keys().map((key) => {
	return Vue.component(_.last(key.split('/')).split('.')[0], files(key));
});
