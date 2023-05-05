package licenta.controller;

import licenta.entity.Elections;
import licenta.service.ElectionsService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

import java.util.List;

@RestController
public class ElectionsController {
    @Autowired
    ElectionsService service;

    @GetMapping("/elections")
    public ResponseEntity<List<Elections>> getElections() {
        return ResponseEntity.ok(service.findAllElections());
    }
}
