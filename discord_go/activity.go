func setActivity(s *discordgo.Session)  {
  err := s.UpdateListeningStatus("something")
  if err != nil {
    panic(err)
  }
}
