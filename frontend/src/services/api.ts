/**
 * api.ts - API service.
 *
 * This service provides functions to interact with the API.
 */

import axios from 'axios'
import { API_BASE_URL } from '@/utils/constants'

// Configuration axios pour inclure les cookies
axios.defaults.withCredentials = true
axios.defaults.xsrfCookieName = 'XSRF-TOKEN'
axios.defaults.xsrfHeaderName = 'X-XSRF-TOKEN'

// Avant toute requête authentifiée, récupérer le token CSRF

const api = axios.create({
  baseURL: API_BASE_URL,
  headers: {
    'Content-Type': 'application/json'
  },
  withCredentials: true,
  xsrfCookieName: 'XSRF-TOKEN',
  xsrfHeaderName: 'X-XSRF-TOKEN'
})

export default api
