package dto

type QuizzesDTO struct {
	ID       int64  `json:"id"`
	Question string `json:"question"`
	A        string `json:"a"`
	B        string `json:"b"`
	C        string `json:"c"`
	Answer   string `json:"answer"`
}

type QuizzesResponse struct {
	Status string       `json:"status"`
	Data   []QuizzesDTO `json:"data"`
}
