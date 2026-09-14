FROM jenkins/jenkins:lts

# Skip the setup wizard if desired
ENV JAVA_OPTS="-Djenkins.install.runSetupWizard=false"

# Copy the plugin list into the image
COPY plugins.txt /usr/share/jenkins/ref/plugins.txt

# Automatically download all parent plugins and their recursive sub-dependencies
RUN jenkins-plugin-cli --plugin-file /usr/share/jenkins/ref/plugins.txt
