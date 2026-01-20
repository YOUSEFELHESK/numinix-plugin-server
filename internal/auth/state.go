package auth

import (
	"math/rand"
	"time"
)

// stateStore holds the mapping of state strings to their corresponding store IDs.
var stateStore = map[string]int{}

// GenerateState creates a random state string of fixed length.
func GenerateState() string {
	const letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"
	// Seed the random number generator with the current time in nanoseconds.
	rand.Seed(time.Now().UnixNano())

	b := make([]byte, 24) // Create a byte slice to hold the state string.
	for i := range b {
		// Fill the byte slice with random letters from the defined set.
		b[i] = letters[rand.Intn(len(letters))]
	}
	return string(b) // Convert the byte slice to a string and return it.
}

// SaveState stores the mapping of a state string to a store ID.
func SaveState(storeID int, state string) {
	stateStore[state] = storeID
}

// GetState retrieves the store ID associated with a given state string.
func GetState(state string) (int, bool) {
	storeID, ok := stateStore[state]
	return storeID, ok // Return the store ID and a boolean indicating if it exists.
}

// GetStoreIDFromState is a wrapper function to retrieve the store ID from a state string.
func GetStoreIDFromState(state string) (int, bool) {
	return GetState(state)
}

// DeleteState removes the mapping of a state string from the store.
func DeleteState(state string) {
	delete(stateStore, state)
}
