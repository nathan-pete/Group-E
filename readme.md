# PHP Docker environment for NHL-Stenden students
This project contains a docker-compose file and configuration files for setting up a development environment for the course PHP on NHL-Stenden university of applied sciences.

## Getting Started
These instructions will aid you in setting up a development environment for use within the PHP courses at NHL-Stenden by using docker. This code is for educational purposes only.

### Prerequisites
#### Windows
- [Docker desktop](https://docs.docker.com/desktop/windows/install/) 

#### Mac
- [Docker Desktop for Mac](https://docs.docker.com/desktop/mac/install/)
    - Note: Do check the architecture of your Mac! (x64/arm64)  
#### Linux and friends
- [Docker engine](https://docs.docker.com/engine/install/#server)
    - Select your distribution from the table and follow the provided instructions.

### Running
The following steps will set-up your development environment
1. Download the archive containing the necessary files.
2. Extract the files to a folder in which you will start your project.
3. Open a terminal in the folder in which you extracted the files.
    - This can be done within a supporting editor (E.g. Visual studio code)
    - Alternatively you can use the terminal to navigate or use a file explorer to open a terminal in the desired folder (Windows: ```Shift + right click in explorer -> Powershell```)
4. Execute the following docker-compose command

```docker-compose up```

5. Wait for docker to start up the container.
6. Go to [127.0.0.1](http://127.0.0.1) in your favorite browser, you should see the welcome screen.



## Using the environment
The extracted files contains a folder called "app". Inside this folder there is another folder called "public". The public folder is where you will need to place your own code and files that are publicly available to the outside world. Everything else is private. 

