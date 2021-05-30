//in main file  "dg.AddHandler(messageHandler)"

//hear
func messageHandler(s *discordgo.Session, m *discordgo.MessageCreate){
    log.Println("Chat message: " + m.Content)
}

