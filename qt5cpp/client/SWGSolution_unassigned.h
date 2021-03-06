/**
 * Route Optimization API
 * Our Route Optimization API solves the so called vehicle routing problem fast. It calculates an optimal tour for a set of vehicles, services and constraints
 *
 * OpenAPI spec version: 1.0
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */

/*
 * SWGSolution_unassigned.h
 * 
 * 
 */

#ifndef SWGSolution_unassigned_H_
#define SWGSolution_unassigned_H_

#include <QJsonObject>


#include <QList>
#include <QString>

#include "SWGObject.h"


namespace Swagger {

class SWGSolution_unassigned: public SWGObject {
public:
    SWGSolution_unassigned();
    SWGSolution_unassigned(QString* json);
    virtual ~SWGSolution_unassigned();
    void init();
    void cleanup();

    QString asJson ();
    QJsonObject* asJsonObject();
    void fromJsonObject(QJsonObject &json);
    SWGSolution_unassigned* fromJson(QString &jsonString);

    QList<QString*>* getServices();
    void setServices(QList<QString*>* services);

    QList<QString*>* getShipments();
    void setShipments(QList<QString*>* shipments);


private:
    QList<QString*>* services;
    QList<QString*>* shipments;
};

} /* namespace Swagger */

#endif /* SWGSolution_unassigned_H_ */
