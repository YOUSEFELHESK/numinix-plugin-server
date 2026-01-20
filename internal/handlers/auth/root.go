package authhandlers

import (
	"net/http"
)

type RootHandler struct{}
// ServeHTTP redirects incoming requests to the /callback endpoint,
// preserving the original query parameters.
func (h *RootHandler) ServeHTTP(w http.ResponseWriter, r *http.Request) {
	http.Redirect(w, r, "/callback?"+r.URL.RawQuery, http.StatusTemporaryRedirect)
}
