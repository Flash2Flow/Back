package main

import (
  "log"
  "github.com/bwmarrin/discordgo"
)

const token string = "token"

var BotID string

func login(){
	token := "token"
  dg, err := discordgo.New("Bot " + token)

  if err != nil {
    log.Println(err.Error())
    return
  }

  u, err := dg.User("@me")

  if err != nil {
    log.Println(err.Error())
  }

  BotID = u.ID


  err = dg.Open()

  if err != nil {
    log.Println(err.Error())
    return
  }
  log.Println("Bot successfully started")


  <-make(chan struct{})
  return

}
