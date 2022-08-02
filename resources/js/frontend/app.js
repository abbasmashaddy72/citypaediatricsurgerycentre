require('./bootstrap')
require('./custom')

import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

import Tobii from 'tobii'

const tobii = new Tobii()

window.tobii = tobii
