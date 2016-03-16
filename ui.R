library(shiny)

shinyUI(fluidPage(

  titlePanel("Taiwan_Tail_PM2.5"),

  sidebarLayout(
    sidebarPanel(
      numericInput("obs", "Number of observations to view:", 10)
    ),

    mainPanel(
      #verbatimTextOutput("summary"),
      #tableOutput("Plot", plotOutput("plot")),
      tableOutput("view")
    )
  )
))
