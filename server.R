library(shiny)
setwd("D:/R.data/PM25_web")

shinyServer(function(input, output) {
  inFile <- read.csv("Taiwan_Tail_PM2.5.csv")
  inFile[, 4:27] <- apply(inFile[, 4:27], 2, as.vector)
  inFile[, 4:27] <- apply(inFile[, 4:27], 2, as.numeric)
  output$view <- renderTable({
    head(inFile, n = input$obs)
  })
  
  #output$plot <- renderPlot({
    
  #})
  
  
  #output$summary <- renderPrint({
  #  summary(inFile[,4:27], na.rm = TRUE)
  #})
  
})
