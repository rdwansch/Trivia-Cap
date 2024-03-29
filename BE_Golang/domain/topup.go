package domain

import (
	"context"
	"github.com/rdwansch/Trivia-Cap/dto"
	"time"
)

type TopUp struct {
	Id              int64     `json:"id"`
	IdUser          int64     `json:"id_user"`
	DiamondWalletID int64     `json:"diamond_wallet_id"`
	Status          string    `json:"status"`
	Amount          float64   `json:"amount"`
	SnapURL         string    `json:"snap_url"`
	AmountDiamond   uint32    `json:"amount_diamond"`
	OrderId         string    `json:"order_id"`
	Token           string    `json:"token"`
	CreatedAt       time.Time `json:"created_at"`
	UpdatedAt       time.Time `json:"updated_at"`
}

type TopUpRepository interface {
	FindByEmail(ctx context.Context, email string) (TopUp, error)
	Insert(ctx context.Context, topUp *TopUp) error
	Update(ctx context.Context, topUp *TopUp) error
	FindTUByOrderID(ctx context.Context, topUp *TopUp) (TopUp, error)
}

type TopUpUseCase interface {
	ConfirmedTopUp(ctx context.Context, email string) error
	InitializeTopUp(ctx context.Context, req dto.TopupReq) (dto.TopupRes, error)
	FindTuByOrderID(orderID string) (TopUp, error)
	//UpdateDiamond()
}
